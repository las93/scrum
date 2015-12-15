<?php

/**
 * Controller Manager
 *
 * @category  	src\Front
 * @package   	src\Front\common
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	http://www.iscreenway.com/framework/licence.php Tout droit rÃ©servÃ© Ã  http://www.iscreenway.com
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */

namespace Venus\src\Front\common;

use \Attila\Orm                     as Orm;
use \Attila\Orm\Where               as Where;
use \Venus\core\Controller          as CoreController;
use \Venus\src\Front\Model\board    as Board;
use \Venus\src\Front\Model\user     as User;

/**
 * Controller Manager
 *
 * @category  	src\Front
 * @package   	src\Front\common
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	http://www.iscreenway.com/framework/licence.php Tout droit rÃ©servÃ© Ã  http://www.iscreenway.com
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */

abstract class Controller extends CoreController 
{
	/**
	 * Constructor
	 *
	 * @access public
	 * @return object
	 */
	public function __construct() {

		parent::__construct();

		$this->modelBoard = function()
		{
            return new Board;
		};

		if ($this->session->get('id_user')) {

            $oUser = new User;
            $oOneUser = $oUser->findOneByid($this->session->get('id_user'));
            
            if (count($oOneUser) < 1 && get_called_class() !== 'Venus\src\Front\Controller\Login') {
                
                $this->session->set('id_user', false);
                $this->redirect($this->url->getUrl('login'));
            }

            $oTeam = $oOneUser->get_team();
            
            $oOrm = new Orm;
            $oWhere = new Where;
            
            $oWhere->whereInf('start', date('Y-m-d'))
                   ->andWhereSup('end', date('Y-m-d'))
                   ->andWhereEqual('id_team', $oTeam->get_id());
           
            $aSprints = $oOrm->select(array('*'))
                             ->from('sprint')
                             ->where($oWhere)
                             ->load();
            
            foreach ($aSprints as $iKey => $oSprint) {
            
                $aSprints[$iKey]->boards = $this->modelBoard
                                                ->findByid_team($oTeam->get_id());
            }
            
    		$this->layout
    		     ->assign('aUser', $oOneUser)
    		     ->assign('aSprints', $aSprints);
    		;
		}
		else {
		    
		    $this->layout
		         ->assign('aUser', null);
		}
		
		if (isset($_GET['language'])) {
		    
		    $this->session
		         ->set('language', $_GET['language']);
		}
	
		if ($this->session->get('language')) {
		    
		    $this->translator
		         ->setLanguage($this->session->get('language'));
		}
		
		$aLanguage = [
            ['flag' => '/img/flag/us.png', 'i18n' => 'en_US', 'title' => $this->translator->_('English')],
            ['flag' => '/img/flag/fr.png', 'i18n' => 'fr_FR', 'title' => $this->translator->_('French')],
            ['flag' => '/img/flag/vn.png', 'i18n' => 'vn_VN', 'title' => $this->translator->_('Vietnameese')]	
		];
		
		$this->layout
		     ->assign('aLanguage', $aLanguage);
	}
	
	/**
	 * Constructor
	 *
	 * @access public
	 * @return object
	 */
	protected function _checkSession()
	{
		if (!$this->session->get('id_user')) {
		    
		    $this->redirect($this->url->getUrl('login'));
		}

		if ($this->session->get('lockscreen') == 1) {
		    
		    $this->redirect($this->url->getUrl('lockscreen'));
		}
	}
}
