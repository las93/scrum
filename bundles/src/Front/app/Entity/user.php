<?php
	
/**
 * Entity to user
 *
 * @category  	\Venus
 * @package   	\Venus\src\Front\Entity
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 Judicaël Paquet (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à Judicaël Paquet
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\Front\Entity;

use \Attila\core\Entity as Entity;
use \Attila\Orm as Orm;

/**
 * Entity to user
 *
 * @category  	\Venus
 * @package   	\Venus\src\Front\Entity
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 Judicaël Paquet (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à Judicaël Paquet
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
class user extends Entity 
{
	/**
	 * id
	 *
	 * @access private
	 * @var    int
	 *
	 * @primary_key
	 */
    private $id = null;
	
	/**
	 * board Entity
	 *
	 * @access private
	 * @var    board
	 * @join
	 *
	 */
    private $board = null;
	
	
	
	/**
	 * project Entity
	 *
	 * @access private
	 * @var    project
	 * @join
	 *
	 */
    private $project = null;
	
	
	
	/**
	 * id_team
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_team = null;
	
	/**
	 * team Entity
	 *
	 * @access private
	 * @var    team
	 * @join
	 *
	 */
    private $team = null;
	
	
	
	/**
	 * id_role
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_role = null;
	
	/**
	 * role Entity
	 *
	 * @access private
	 * @var    role
	 * @join
	 *
	 */
    private $role = null;
	
	
	
	/**
	 * lastname
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $lastname = null;
	
	/**
	 * firstname
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $firstname = null;
	
	/**
	 * login
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $login = null;
	
	/**
	 * password
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $password = null;
	
	/**
	 * get id of user
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of user
	 *
	 * @access public
	 * @param  int $id id of user
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get board entity join by id of user
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return array
	 */
	public function get_board($aWhere = array())
	{
		if ($this->board === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('board');
												   
	        $aWhere['id_user'] = $this->get_id();
											
													  
            $this->board = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');
        }

		return $this->board;
	}
	
	/**
	 * set board entity join by id of user
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\board  $board board entity
	 * @join
	 * @return array
	 */
	public function set_board(array $board)
	{
		$this->board = $board;
		return $this;
	}

	/**
	 * get project entity join by id of user
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return array
	 */
	public function get_project($aWhere = array())
	{
		if ($this->project === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('project');
												   
	        $aWhere['id_user_assign'] = $this->get_id();
											
													  
            $this->project = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');
        }

		return $this->project;
	}
	
	/**
	 * set project entity join by id of user
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\project  $project project entity
	 * @join
	 * @return array
	 */
	public function set_project(array $project)
	{
		$this->project = $project;
		return $this;
	}

	/**
	 * get id_team of user
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_team()
	{
		return $this->id_team;
	}

	/**
	 * set id_team of user
	 *
	 * @access public
	 * @param  int $id_team id_team of user
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_id_team($id_team) 
	{
		$this->id_team = $id_team;
		return $this;
	}
	
	/**
	 * get team entity join by id_team of user
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\user
	 */
	public function get_team($aWhere = array())
	{
		if ($this->team === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('team');
												   
	        $aWhere['id'] = $this->get_id_team();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->team = $aResult[0]; }
          else { $this->team = array(); }
        }

		return $this->team;
	}
	
	/**
	 * set team entity join by id_team of user
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\team  $team team entity
	 * @join
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_team(\Venus\src\Front\Entity\team $team)
	{
		$this->team = $team;
		return $this;
	}

	/**
	 * get id_role of user
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_role()
	{
		return $this->id_role;
	}

	/**
	 * set id_role of user
	 *
	 * @access public
	 * @param  int $id_role id_role of user
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_id_role($id_role) 
	{
		$this->id_role = $id_role;
		return $this;
	}
	
	/**
	 * get role entity join by id_role of user
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\user
	 */
	public function get_role($aWhere = array())
	{
		if ($this->role === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('role');
												   
	        $aWhere['id'] = $this->get_id_role();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->role = $aResult[0]; }
          else { $this->role = array(); }
        }

		return $this->role;
	}
	
	/**
	 * set role entity join by id_role of user
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\role  $role role entity
	 * @join
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_role(\Venus\src\Front\Entity\role $role)
	{
		$this->role = $role;
		return $this;
	}

	/**
	 * get lastname of user
	 *
	 * @access public
	 * @return string
	 */
	public function get_lastname()
	{
		return $this->lastname;
	}

	/**
	 * set lastname of user
	 *
	 * @access public
	 * @param  string $lastname lastname of user
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_lastname($lastname) 
	{
		$this->lastname = $lastname;
		return $this;
	}
	
	/**
	 * get firstname of user
	 *
	 * @access public
	 * @return string
	 */
	public function get_firstname()
	{
		return $this->firstname;
	}

	/**
	 * set firstname of user
	 *
	 * @access public
	 * @param  string $firstname firstname of user
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_firstname($firstname) 
	{
		$this->firstname = $firstname;
		return $this;
	}
	
	/**
	 * get login of user
	 *
	 * @access public
	 * @return string
	 */
	public function get_login()
	{
		return $this->login;
	}

	/**
	 * set login of user
	 *
	 * @access public
	 * @param  string $login login of user
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_login($login) 
	{
		$this->login = $login;
		return $this;
	}
	
	/**
	 * get password of user
	 *
	 * @access public
	 * @return string
	 */
	public function get_password()
	{
		return $this->password;
	}

	/**
	 * set password of user
	 *
	 * @access public
	 * @param  string $password password of user
	 * @return \Venus\src\Front\Entity\user
	 */
	public function set_password($password) 
	{
		$this->password = $password;
		return $this;
	}
	}