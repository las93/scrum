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
use \Venus\src\Front\Model\role         as Role;

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
}