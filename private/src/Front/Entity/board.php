<?php
	
/**
 * Entity to board
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
 * Entity to board
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
class board extends Entity 
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
	 * board_part Entity
	 *
	 * @access private
	 * @var    board_part
	 * @join
	 *
	 */
    private $board_part = null;
	
	
	
	/**
	 * name
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $name = null;
	
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
	 * id_user
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_user = null;
	
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
	 * get id of board
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of board
	 *
	 * @access public
	 * @param  int $id id of board
	 * @return \Venus\src\Front\Entity\board
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get board_part entity join by id of board
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return array
	 */
	public function get_board_part($aWhere = array())
	{
		if ($this->board_part === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('board_part');
												   
	        $aWhere['id_board'] = $this->get_id();
											
													  
            $this->board_part = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity');
        }

		return $this->board_part;
	}
	
	/**
	 * set board_part entity join by id of board
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\board_part  $board_part board_part entity
	 * @join
	 * @return array
	 */
	public function set_board_part(array $board_part)
	{
		$this->board_part = $board_part;
		return $this;
	}

	/**
	 * get name of board
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of board
	 *
	 * @access public
	 * @param  string $name name of board
	 * @return \Venus\src\Front\Entity\board
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	 * get id_role of board
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_role()
	{
		return $this->id_role;
	}

	/**
	 * set id_role of board
	 *
	 * @access public
	 * @param  int $id_role id_role of board
	 * @return \Venus\src\Front\Entity\board
	 */
	public function set_id_role($id_role) 
	{
		$this->id_role = $id_role;
		return $this;
	}
	
	/**
	 * get role entity join by id_role of board
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\board
	 */
	public function get_role($aWhere = array())
	{
		if ($this->role === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('role');
												   
	        $aWhere['id'] = $this->get_id_role();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity');

          if (count($aResult) > 0) { $this->role = $aResult[0]; }
          else { $this->role = array(); }
        }

		return $this->role;
	}
	
	/**
	 * set role entity join by id_role of board
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\role  $role role entity
	 * @join
	 * @return \Venus\src\Front\Entity\board
	 */
	public function set_role(\Venus\src\Front\Entity\role $role)
	{
		$this->role = $role;
		return $this;
	}

	/**
	 * get id_user of board
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_user()
	{
		return $this->id_user;
	}

	/**
	 * set id_user of board
	 *
	 * @access public
	 * @param  int $id_user id_user of board
	 * @return \Venus\src\Front\Entity\board
	 */
	public function set_id_user($id_user) 
	{
		$this->id_user = $id_user;
		return $this;
	}
	
	/**
	 * get user entity join by id_user of board
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\board
	 */
	public function get_user($aWhere = array())
	{
		if ($this->user === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('user');
												   
	        $aWhere['id'] = $this->get_id_user();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity');

          if (count($aResult) > 0) { $this->user = $aResult[0]; }
          else { $this->user = array(); }
        }

		return $this->user;
	}
	
	/**
	 * set user entity join by id_user of board
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\user  $user user entity
	 * @join
	 * @return \Venus\src\Front\Entity\board
	 */
	public function set_user(\Venus\src\Front\Entity\user $user)
	{
		$this->user = $user;
		return $this;
	}
}