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
use \Venus\src\Front\Entity\project     as EntityProject;
use \Venus\src\Front\Model\project      as ModelProject;

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
class Project extends Controller
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
        
        $oProject = new ModelProject;
        $aThemes = $oProject->findBytype('theme');
        
        $this->layout
             ->assign('aProjects', $aThemes);
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
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            
            if (isset($_POST['name']) && strlen($_POST['name']) > 0) {
                
                $oEntityProject = new EntityProject;
                
                $oEntityProject->set_name($_POST['name'])
                               ->set_content($_POST['description'])
                               ->set_parent_id(0)
                               ->set_type('theme')
                               ->set_id_user_assign(1)
                               ->save();
            }
        }
        
        $this->layout
			 ->assign('model', '/src/Front/View/ProjectAdd.tpl')
             ->display();
    }
}