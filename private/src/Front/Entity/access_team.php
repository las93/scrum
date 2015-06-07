<?php
	
/**
 * Entity to access_team
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
 * Entity to access_team
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
class access_team extends Entity 
{
	/**
	 * id_team
	 *
	 * @access private
	 * @var    int
	 *
	 * @primary_key
	 */
    private $id_team = null;
	
	/**
	 * id_access
	 *
	 * @access private
	 * @var    int
	 *
	 * @primary_key
	 */
    private $id_access = null;
	
	/**
	 * get id_team of access_team
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_team()
	{
		return $this->id_team;
	}

	/**
	 * set id_team of access_team
	 *
	 * @access public
	 * @param  int $id_team id_team of access_team
	 * @return \Venus\src\Front\Entity\access_team
	 */
	public function set_id_team($id_team) 
	{
		$this->id_team = $id_team;
		return $this;
	}
	
	/**
	 * get id_access of access_team
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_access()
	{
		return $this->id_access;
	}

	/**
	 * set id_access of access_team
	 *
	 * @access public
	 * @param  int $id_access id_access of access_team
	 * @return \Venus\src\Front\Entity\access_team
	 */
	public function set_id_access($id_access) 
	{
		$this->id_access = $id_access;
		return $this;
	}
	}