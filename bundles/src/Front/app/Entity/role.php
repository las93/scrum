<?php
	
/**
 * Entity to role
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
 * Entity to role
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
class role extends Entity 
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
	 * user Entity
	 *
	 * @access private
	 * @var    user
	 * @join
	 *
	 */
    private $user = null;
	
	
	
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
	 * statut Entity
	 *
	 * @access private
	 * @var    statut
	 * @join
	 *
	 */
    private $statut = null;
	
	
	
	/**
	 * statut_permission Entity
	 *
	 * @access private
	 * @var    statut_permission
	 * @join
	 *
	 */
    private $statut_permission = null;
	
	
	
	/**
	 * name
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $name = null;
	
	/**
	 * type
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $type = null;
	
	/**
	 * get id of role
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of role
	 *
	 * @access public
	 * @param  int $id id of role
	 * @return \Venus\src\Front\Entity\role
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get user entity join by id of role
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return array
	 */
	public function get_user($aWhere = array())
	{
		if ($this->user === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('user');
												   
	        $aWhere['id_role'] = $this->get_id();
											
													  
            $this->user = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');
        }

		return $this->user;
	}
	
	/**
	 * set user entity join by id of role
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\user  $user user entity
	 * @join
	 * @return array
	 */
	public function set_user(array $user)
	{
		$this->user = $user;
		return $this;
	}

	/**
	 * get board entity join by id of role
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
												   
	        $aWhere['id_role'] = $this->get_id();
											
													  
            $this->board = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');
        }

		return $this->board;
	}
	
	/**
	 * set board entity join by id of role
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
	 * get statut entity join by id of role
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return array
	 */
	public function get_statut($aWhere = array())
	{
		if ($this->statut === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('statut');
												   
	        $aWhere['id_role'] = $this->get_id();
											
													  
            $this->statut = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');
        }

		return $this->statut;
	}
	
	/**
	 * set statut entity join by id of role
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\statut  $statut statut entity
	 * @join
	 * @return array
	 */
	public function set_statut(array $statut)
	{
		$this->statut = $statut;
		return $this;
	}

	/**
	 * get statut_permission entity join by id of role
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return array
	 */
	public function get_statut_permission($aWhere = array())
	{
		if ($this->statut_permission === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('statut_permission');
												   
	        $aWhere['id_role'] = $this->get_id();
											
													  
            $this->statut_permission = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');
        }

		return $this->statut_permission;
	}
	
	/**
	 * set statut_permission entity join by id of role
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\statut_permission  $statut_permission statut_permission entity
	 * @join
	 * @return array
	 */
	public function set_statut_permission(array $statut_permission)
	{
		$this->statut_permission = $statut_permission;
		return $this;
	}

	/**
	 * get name of role
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of role
	 *
	 * @access public
	 * @param  string $name name of role
	 * @return \Venus\src\Front\Entity\role
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	 * get type of role
	 *
	 * @access public
	 * @return string
	 */
	public function get_type()
	{
		return $this->type;
	}

	/**
	 * set type of role
	 *
	 * @access public
	 * @param  string $type type of role
	 * @return \Venus\src\Front\Entity\role
	 */
	public function set_type($type) 
	{
		$this->type = $type;
		return $this;
	}
	}