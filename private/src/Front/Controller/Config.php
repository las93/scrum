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
use \Venus\src\Front\Entity\role        as EntityRole;
use \Venus\src\Front\Entity\user        as EntityUser;
use \Venus\src\Front\Model\role         as Role;
use \Venus\src\Front\Model\team         as Team;
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
class Config extends Controller
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
     * trigger before the method
     * 
     * @access public
     * @return void
     */
    public function beforeExecuteRoute()
    {
        $this->_checkSession();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function show()
    {   
        $this->layout
             ->assign('sTitle', $this->translator->_('Configuration'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function showGroups()
    {   
        if ($_GET['delete']) {

            $oEntityRole = new EntityRole;
            $oEntityRole->set_id($_GET['delete'])
                        ->remove();
            
            $_GET['msg'] = $this->translator->_('ItsDeleted');
        }
        
        $oRole = new Role;
        $aRoles = $oRole->findAll();
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigGroups.tpl')
			 ->assign('aRoles', $aRoles)
             ->assign('sTitle', $this->translator->_('ManageGroups'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageGroups'))
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function addGroup()
    {   
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['name']) && isset($_POST['type'])) {

            $oEntityRole = new EntityRole;
            $oEntityRole->set_name($_POST['name'])
                        ->set_type($_POST['type'])
                        ->save();
            
            $this->redirect($this->url->getUrl('setup_groups').'?msg='.urlencode($this->translator->_('AddedSuccessfully')));
        }
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigGroupAdd.tpl')
             ->assign('sTitle', $this->translator->_('AddGroup'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageGroups'))
             ->assign('sThirdUrl', $this->url->getUrl('setup_groups'))
             ->assign('sFourTitle', $this->translator->_('AddGroup'))
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @param  int id
     * @return void
     */
    public function updateGroup($id)
    {   
        $oRole = new Role;
        $oOneRole = $oRole->findOneByid($id);
        
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['name']) && isset($_POST['type'])) {

            
            $oOneRole->set_name($_POST['name'])
                     ->set_type($_POST['type'])
                     ->save();
            
            $this->redirect($this->url->getUrl('setup_groups').'?msg='.urlencode($this->translator->_('ModifiedSuccessfully')));
        }
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigGroupAdd.tpl')
             ->assign('sTitle', $this->translator->_('UpdateGroup'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageGroups'))
             ->assign('sThirdUrl', $this->url->getUrl('setup_groups'))
             ->assign('sFourTitle', $this->translator->_('UpdateGroup'))
             ->assign('oRole', $oOneRole)
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function showRoles()
    {   
        if ($_GET['delete']) {

            $oEntityRole = new EntityRole;
            $oEntityRole->set_id($_GET['delete'])
                        ->remove();
            
            $_GET['msg'] = $this->translator->_('ItsDeleted');
        }
        
        $oRole = new Role;
        $aRoles = $oRole->findAll();
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigRoles.tpl')
			 ->assign('aRoles', $aRoles)
             ->assign('sTitle', $this->translator->_('ManageRoles'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageRoles'))
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function addRole()
    {   
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['name']) && isset($_POST['type'])) {

            $oEntityRole = new EntityRole;
            $oEntityRole->set_name($_POST['name'])
                        ->set_type($_POST['type'])
                        ->save();
            
            $this->redirect($this->url->getUrl('setup_groups').'?msg='.urlencode($this->translator->_('AddedSuccessfully')));
        }
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigRoleAdd.tpl')
             ->assign('sTitle', $this->translator->_('AddRole'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageRoles'))
             ->assign('sThirdUrl', $this->url->getUrl('setup_roles'))
             ->assign('sFourTitle', $this->translator->_('AddRole'))
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @param  int id
     * @return void
     */
    public function updateRole($id)
    {   
        $oRole = new Role;
        $oOneRole = $oRole->findOneByid($id);
        
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['name']) && isset($_POST['type'])) {

            
            $oOneRole->set_name($_POST['name'])
                     ->set_type($_POST['type'])
                     ->save();
            
            $this->redirect($this->url->getUrl('setup_groups').'?msg='.urlencode($this->translator->_('ModifiedSuccessfully')));
        }
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigRoleAdd.tpl')
             ->assign('sTitle', $this->translator->_('UpdateRole'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageRoles'))
             ->assign('sThirdUrl', $this->url->getUrl('setup_roles'))
             ->assign('sFourTitle', $this->translator->_('UpdateRole'))
             ->assign('oRole', $oOneRole)
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function showUsers()
    {   
        if ($_GET['delete']) {

            $oEntityUser = new EntityUser;
            $oEntityUser->set_id($_GET['delete'])
                        ->remove();
            
            $_GET['msg'] = $this->translator->_('ItsDeleted');
        }
        
        $oUser = new User;
        $aUsers = $oUser->findAll();
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigUsers.tpl')
			 ->assign('aUsers', $aUsers)
             ->assign('sTitle', $this->translator->_('ManageUsers'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageUsers'))
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function addUser()
    {   
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['login']) && isset($_POST['team']) && isset($_POST['role'])
             && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['password'])) {

            $oEntityUser = new EntityUser;
            $oEntityUser->set_login($_POST['login'])
                        ->set_id_team($_POST['team'])
                        ->set_id_role($_POST['role'])
                        ->set_firstname($_POST['firstname'])
                        ->set_lastname($_POST['lastname'])
                        ->set_password(md5($_POST['password']))
                        ->save();
            
            $this->redirect($this->url->getUrl('setup_users').'?msg='.urlencode($this->translator->_('AddedSuccessfully')));
        }
        
        $oRole = new Role;
        $aRoles = $oRole->findAll();
        
        $oTeam = new Team;
        $aTeams = $oTeam->findAll();
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigUserAdd.tpl')
             ->assign('sTitle', $this->translator->_('AddUser'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageUsers'))
             ->assign('sThirdUrl', $this->url->getUrl('setup_users'))
             ->assign('sFourTitle', $this->translator->_('AddRole'))
			 ->assign('aRoles', $aRoles)
			 ->assign('aTeams', $aTeams)
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @param  int id
     * @return void
     */
    public function updateUser($id)
    {   
        $oUser = new User;
        $oEntityUser = $oUser->findOneByid($id);
        
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['login']) && isset($_POST['team']) && isset($_POST['role'])
             && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['password'])) {

            $oEntityUser->set_login($_POST['login'])
                        ->set_id_team($_POST['team'])
                        ->set_id_role($_POST['role'])
                        ->set_firstname($_POST['firstname'])
                        ->set_lastname($_POST['lastname'])
                        ->set_password(md5($_POST['password']))
                        ->save();
            
            $this->redirect($this->url->getUrl('setup_users').'?msg='.urlencode($this->translator->_('AddedSuccessfully')));
        }
        
        $oRole = new Role;
        $aRoles = $oRole->findAll();
        
        $oTeam = new Team;
        $aTeams = $oTeam->findAll();
        
        $this->layout
			 ->assign('model', '/src/Front/View/ConfigUserAdd.tpl')
             ->assign('sTitle', $this->translator->_('AddUser'))
             ->assign('sSecondTitle', $this->translator->_('Configuration'))
             ->assign('sSecondUrl', $this->url->getUrl('setup'))
             ->assign('sThirdTitle', $this->translator->_('ManageUsers'))
             ->assign('sThirdUrl', $this->url->getUrl('setup_users'))
             ->assign('sFourTitle', $this->translator->_('AddRole'))
			 ->assign('aRoles', $aRoles)
			 ->assign('aTeams', $aTeams)
             ->assign('oUser', $oEntityUser)
             ->display();
    }
    
}