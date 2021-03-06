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
        $oProject = new ModelProject;
        $aThemes = $oProject->findBytype('theme');
        
        $aEpics = [];
        
        foreach ($aThemes as $oTheme) {
        
            $oProject = new ModelProject;
            $aEpics[$oTheme->get_id()] = count($oProject->findBy(['type' => 'epic', 'parent_id' => $oTheme->get_id()]));
        }
        
        $this->layout
             ->assign('aCountEpics', $aEpics)
             ->assign('sTitle', $this->translator->_('Themes'))
             ->assign('sSecondTitle', $this->translator->_('Themes'))
             ->assign('iPage', 1)
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
                               ->set_color($_POST['color'])
                               ->set_color($_POST['icon'])
                               ->set_parent_id(0)
                               ->set_type('theme')
                               ->set_id_user_assign(1)
                               ->save();
            }
        }
        
        $this->layout
			 ->assign('model', '/src/Front/View/ProjectAdd.tpl')
             ->assign('sTitle', $this->translator->_('AddNewTheme'))
             ->assign('sSecondTitle', $this->translator->_('Themes'))
             ->assign('sSecondUrl', $this->url->getUrl('project'))
             ->assign('sThirdTitle', $this->translator->_('AddTheme'))
             ->assign('iPage', 2)
             ->display();
    }
    
    /**
     * the main page of theme
     *
     * @access public
     * @param  int $id
     * @return void
     */
    public function showTheme($id)
    {
        $oProject = new ModelProject;
        $aEpics = $oProject->findBy(['type' => 'epic', 'parent_id' => $id]);
        
        $oProject = new ModelProject;
        $oTheme = $oProject->findOneByid($id);
        
        $this->layout
			 ->assign('model', '/src/Front/View/Theme.tpl')
             ->assign('aEpics', $aEpics)
             ->assign('sTitle', $oTheme->get_name().' | '.$this->translator->_('Epics'))
             ->assign('sSecondTitle', $this->translator->_('Themes'))
             ->assign('sSecondUrl', $this->url->getUrl('project'))
             ->assign('sThirdTitle', $this->translator->_('Epics'))
             ->assign('iPage', 3)
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @param  int $id
     * @return void
     */
    public function addTheme($id)
    {
        if (isset($_POST) && count($_POST) > 0) {
            
            if (isset($_POST['name']) && strlen($_POST['name']) > 0) {
                
                $oEntityProject = new EntityProject;
                
                $oEntityProject->set_name($_POST['name'])
                               ->set_content($_POST['description'])
                               ->set_color($_POST['color'])
                               ->set_parent_id($id)
                               ->set_type('epic')
                               ->set_id_user_assign(1)
                               ->save();
            }
        }
        
        $this->layout
			 ->assign('model', '/src/Front/View/ThemeAdd.tpl')
             ->assign('sTitle', $this->translator->_('AddNewEpic'))
             ->assign('sSecondTitle', $this->translator->_('Themes'))
             ->assign('sSecondUrl', $this->url->getUrl('project'))
             ->assign('sThirdTitle', $this->translator->_('Epics'))
             ->assign('sThirdUrl', $this->url->getUrl('theme', ['id' => $id]))
             ->assign('sFourTitle', $this->translator->_('AddEpic'))
             ->assign('iPage', 2)
             ->assign('iId', $id)
             ->display();
    }
    
    /**
     * the main page of theme
     *
     * @access public
     * @param  int $id
     * @return void
     */
    public function showEpic($id)
    {
        $oProject = new ModelProject;
        $aUserStories = $oProject->findBy(['type' => 'user_story', 'parent_id' => $id]);
        
        foreach ($aUserStories as $iKey => $oUserStory) {

            $oTask = new ModelProject;
            $aTasks = $oTask->findBy(['type' => 'task', 'parent_id' => $oUserStory->get_id()]);
            $aUserStories[$iKey]->count = count($aTasks);
        }
        
        $oProject = new ModelProject;
        $oEpic = $oProject->findOneByid($id);

        $iIdTheme = $oEpic->get_parent()->get_id();
        
        $this->layout
			 ->assign('model', '/src/Front/View/Epic.tpl')
             ->assign('aUserStories', $aUserStories)
             ->assign('sTitle', $oEpic->get_name().' | '.$this->translator->_('UserStories'))
             ->assign('sSecondTitle', $this->translator->_('Themes'))
             ->assign('sSecondUrl', $this->url->getUrl('project'))
             ->assign('sThirdTitle', $this->translator->_('Epics'))
             ->assign('sThirdUrl', $this->url->getUrl('theme', ['id' => $iIdTheme]))
             ->assign('sFourTitle', $this->translator->_('UserStories'))
             ->assign('iPage', 3)
             ->display();
    }
}