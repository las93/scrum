<?php

/**
 * Controller to test
 *
 * @category  	Venus\src
 * @package   	Venus\src\Front\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2015 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/scrum/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/scrum
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\Front\Controller;

use \Venus\src\Front\common\Controller  as Controller;
use \Venus\src\Front\Model\user         as User;

/**
 * Controller to test
 *
 * @category    Venus\src
 * @package     Venus\src\Front\Controller
 * @author      Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright   Copyright (c) 2013-2015 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license     https://github.com/las93/scrum/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version     Release: 1.0.0
 * @filesource  https://github.com/las93/scrum
 * @link        https://github.com/las93
 * @since       1.0
 */
class Login extends Controller
{
    /**
     * Constructor
     *
     * @access public
     * @return object
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function show()
    {
        $this->_connection();
        
        if ($this->session->get('id_user')) {
        
            $this->redirect($this->url->getUrl('home'));
        }
           
        $this->view
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function lockscreen()
    {        
        $oUser = new User;
        $oGetUser = $oUser->findOneByid($this->session->get('id_user'));
        
        if (!$oGetUser) {
            
            $this->redirect($this->url->getUrl('home'));
        }
        
        $this->session->set('lockscreen', 1);
        
        $this->_connection();
        
        $this->view
             ->assign('login', $oGetUser->get_login())
             ->assign('oUser', $oGetUser)
             ->display('/src/Front/View/Lockscreen.tpl');
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    private function _connection()
    {        
        if (isset($_POST) && count($_POST) > 0) {
        
            if (isset($_POST['login']) && strlen($_POST['login']) > 0 && isset($_POST['password']) 
                && strlen($_POST['password']) > 0) {
        
                $oUser = new User;
                $oGetUser = $oUser->findOneBy(['login' => $_POST['login'], 'password' => md5($_POST['password'])]);
                
                if ($oGetUser->get_id() > 0) {
                    
                    $this->session->set('id_user', $oGetUser->get_id());
                    $this->session->set('lockscreen', 0);
                    $this->redirect($this->url->getUrl('home'));
                }
            }
        }
    }
}