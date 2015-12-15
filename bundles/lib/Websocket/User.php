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
namespace Venus\lib\Websocket;

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
class User 
{
    /**
     * @access private
     * @var    int
     */
    private $_iId;
    
    /**
     * @access private
     * @var    resource
     */
    private $_rSocket;
    
    /**
     * @access private
     * @var    bool
     */
    private $_bHandshake;


    /**
     * get id
     *
     * @access public
     * @return int
     */
    public function getId() {
        
        return $this->_iId;
    }
    
    /**
     * set socket
     *
     * @access public
     * @param  int $iId
     * @return User
     */
    public function setId($iId) {
        
        $this->_iId = $iId;
        return $this;
    }
    
    /**
     * get socket
     *
     * @access public
     * @return bool
     */
    public function getSocket() {
        
        return $this->_rSocket;
    }
    
    /**
     * set socket
     *
     * @access public
     * @param  resource $rSocket
     * @return User
     */
    public function setSocket($rSocket) {
        
        $this->_rSocket = $rSocket;
        return $this;
    }
    
    /**
     * get handshake
     *
     * @access public
     * @return bool
     */
    public function getHandshake() {
        
        return $this->_bHandshake;
    }
    
    /**
     * get handshake
     *
     * @access public
     * @param  bool $bHandshake
     * @return User
     */
    public function setHandshake($bHandshake) {
        
        $this->_bHandshake = $bHandshake;
        return $this;
    }
}