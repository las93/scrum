<?php  

/**
 * Websocket Connector
 *
 * @category  	lib
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 2.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	2.0.0
 */
namespace Venus\lib;

use \Venus\lib\Websocket\User as User;

/**
 * This class manage the websocket class
 *
 * @category  	lib
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 2.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	2.0.0
 */
class WebSocket
{
    /**
     * @access private
     * @var    resource
     */
    private $_rMaster;

    /**
     * @access private
     * @var    array
     */
    private $_aSockets = array();

    /**
     * @access private
     * @var    array
     */
    private $_aUsers   = array();
    
    /**
     * @access private
     * @var    bool
     */
    private $_bDebug   = false;

    /**
     * constructor
     * 
     * @access public
     * @param  string $sAddress
     * @param  int $iPort
     * @return void
     */
    public function __construct($sAddress, $iPort)
    {
        error_reporting(E_ALL);
        set_time_limit(0);
        ob_implicit_flush();

        $this->_rMaster = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)      or die("socket_create() failed");
        socket_set_option($this->_rMaster, SOL_SOCKET, SO_REUSEADDR, 1)     or die("socket_option() failed");
        socket_bind($this->_rMaster, $sAddress, $iPort)                     or die("socket_bind() failed");
        socket_listen($this->_rMaster, 20)                                   or die("socket_listen() failed");
        $this->_aSockets[] = $this->_rMaster;
        $this->say("Server Started : ".date('Y-m-d H:i:s'));
        $this->say("Listening on   : ".$sAddress." port ".$iPort);
        $this->say("Master socket  : ".$this->_rMaster."\n");
    
        while (true) {
            
            $aChanged = $this->_aSockets;
            socket_select($aChanged, $aWrite = null, $aExcept = null, null);
          
            foreach ($aChanged as $rSocket) {
              
                if ($rSocket == $this->_rMaster) {
                    
                    $rClient = socket_accept($this->_rMaster);
                  
                    if ($rClient < 0) { 
                      
                        $this->log("socket_accept() failed");
                        continue;
                    }
                    else { 
                      
                        $this->connect($rClient);
                    }
                }
                else {
                    
                    $iBytes = @socket_recv($rSocket, $sBuffer, 2048, 0);
                  
                    if ($iBytes == 0) {
                      
                        $this->disconnect($rSocket);
                    }
                    else {
                    
                        $oUser = $this->getuserbysocket($rSocket);
                        
                        if (!$oUser->getHandshake()) { $this->dohandshake($oUser, $sBuffer); }
                        else { $this->process($oUser, $this->unwrap($sBuffer)); }
                    }
                }
            }
        }
    }

    /**
     * process
     *
     * @access public
     * @param  object $oUser
     * @param  string $sMessage
     * @return void
     */
    public function process($oUser, $sMessage)
    {
        /* Extend and modify this method to suit your needs */
        /* Basic usage is to echo incoming messages back to client */
        $this->send($oUser->getSocket(), $sMessage);
    }

    /**
     * send the result
     *
     * @access public
     * @param  resource $rClient
     * @param  string $sMessage
     * @return void
     */
    public function send($rClient, $sMessage)
    { 
        $this->say("> ".$sMessage);
        $sMessage = $this->wrap($sMessage);
        socket_write($rClient, $sMessage,strlen($sMessage));
        $this->say("! ".strlen($sMessage));
    } 

    /**
     * connect
     *
     * @access public
     * @param  ressource $rSocket
     * @return void
     */
    public function connect($rSocket)
    {
        $oUser = new User();
        $oUser->getId() = uniqid();
        $oUser->setSocket($rSocket);
        array_push($this->_aUsers, $oUser);
        array_push($this->_aSockets, $rSocket);
        $this->log($rSocket." CONNECTED!");
        $this->log(date("d/n/Y ")."at ".date("H:i:s T"));
    }

    /**
     * disconnect
     *
     * @access public
     * @param  ressource $rSocket
     * @return void
     */
    function disconnect($rSocket)
    {
        $iFound = null;
        $n = count($this->_aUsers);
        
        for ($i = 0 ; $i < $n ; $i++) {
            
            if ($this->_aUsers[$i]->getSocket() == $rSocket){ $iFound = $i; break; }
        }
        
        if (!is_null($iFound)) { array_splice($this->_aUsers, $iFound, 1); }
        
        $mIndex = array_search($rSocket, $this->_aSockets);
        socket_close($rSocket);
        $this->log($rSocket." DISCONNECTED!");
        
        if ($mIndex >= 0) { array_splice($this->_aSockets, $mIndex, 1); }
    }

  function dohandshake($oUser,$sBuffer){
    $this->log("\nRequesting handshake...");
    $this->log($sBuffer);
    list($resource,$host,$origin,$key1,$key2,$l8b) = $this->getheaders($sBuffer);
    $this->log("Handshaking...");
    //$iPort = explode(":",$host);
    //$iPort = $iPort[1];
    //$this->log($origin."\r\n".$host);
    $upgrade  = "HTTP/1.1 101 WebSocket Protocol Handshake\r\n" .
                "Upgrade: WebSocket\r\n" .
                "Connection: Upgrade\r\n" .
                                //"WebSocket-Origin: " . $origin . "\r\n" .
                                //"WebSocket-Location: ws://" . $host . $resource . "\r\n" .
                "Sec-WebSocket-Origin: " . $origin . "\r\n" .
                    "Sec-WebSocket-Location: ws://" . $host . $resource . "\r\n" .
                    //"Sec-WebSocket-Protocol: icbmgame\r\n" . //Client doesn't send this
                "\r\n" .
                    $this->calcKey($key1,$key2,$l8b) . "\r\n";// .
                        //"\r\n";
    socket_write($oUser->getSocket(),$upgrade.chr(0),strlen($upgrade.chr(0)));
    $oUser->setHandshake(true);
    $this->log($upgrade);
    $this->log("Done handshaking...");
    return true;
  }
  
  function calcKey($key1,$key2,$l8b){
        //Get the numbers
        preg_match_all('/([\d]+)/', $key1, $key1_num);
        preg_match_all('/([\d]+)/', $key2, $key2_num);
        //Number crunching [/bad pun]
        $this->log("Key1: " . $key1_num = implode($key1_num[0]) );
        $this->log("Key2: " . $key2_num = implode($key2_num[0]) );
        //Count spaces
        preg_match_all('/([ ]+)/', $key1, $key1_spc);
        preg_match_all('/([ ]+)/', $key2, $key2_spc);
        //How many spaces did it find?
        $this->log("Key1 Spaces: " . $key1_spc = strlen(implode($key1_spc[0])) );
        $this->log("Key2 Spaces: " . $key2_spc = strlen(implode($key2_spc[0])) );
        if($key1_spc==0|$key2_spc==0){ $this->log("Invalid key");return; }
        //Some math
        $key1_sec = pack("N",$key1_num / $key1_spc); //Get the 32bit secret key, minus the other thing
        $key2_sec = pack("N",$key2_num / $key2_spc);
        //This needs checking, I'm not completely sure it should be a binary string
        return md5($key1_sec.$key2_sec.$l8b,1); //The result, I think
  }
  
  function getheaders($req){
    $r=$h=$o=null;
    if(preg_match("/GET (.*) HTTP/"               ,$req,$match)){ $r=$match[1]; }
    if(preg_match("/Host: (.*)\r\n/"              ,$req,$match)){ $h=$match[1]; }
    if(preg_match("/Origin: (.*)\r\n/"            ,$req,$match)){ $o=$match[1]; }
    if(preg_match("/Sec-WebSocket-Key1: (.*)\r\n/",$req,$match)){ $this->log("Sec Key1: ".$sk1=$match[1]); }
    if(preg_match("/Sec-WebSocket-Key2: (.*)\r\n/",$req,$match)){ $this->log("Sec Key2: ".$sk2=$match[1]); }
    if($match=substr($req,-8))                                                                  { $this->log("Last 8 bytes: ".$l8b=$match); }
    return array($r,$h,$o,$sk1,$sk2,$l8b);
  }

  function getuserbysocket($rSocket){
    $found=null;
    foreach($this->_aUsers as $oUser){
      if($oUser->getSocket() ==$rSocket){ $found=$oUser; break; }
    }
    return $found;
  }

  function     say($sMessage=""){ echo $sMessage."\n"; }
  function     log($sMessage=""){ if($this->_bDebug){ echo $sMessage."\n"; } }
  function    wrap($sMessage=""){ return chr(0).$sMessage.chr(255); }
  function  unwrap($sMessage=""){ return substr($sMessage,1,strlen($sMessage)-2); }

}
