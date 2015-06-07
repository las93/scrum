<?php
	
/**
 * Entity to access
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
 * Entity to access
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
class access extends Entity 
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
	 * name
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $name = null;
	
	/**
	 * description
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $description = null;
	
	/**
	 * get id of access
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of access
	 *
	 * @access public
	 * @param  int $id id of access
	 * @return \Venus\src\Front\Entity\access
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get name of access
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of access
	 *
	 * @access public
	 * @param  string $name name of access
	 * @return \Venus\src\Front\Entity\access
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	 * get description of access
	 *
	 * @access public
	 * @return string
	 */
	public function get_description()
	{
		return $this->description;
	}

	/**
	 * set description of access
	 *
	 * @access public
	 * @param  string $description description of access
	 * @return \Venus\src\Front\Entity\access
	 */
	public function set_description($description) 
	{
		$this->description = $description;
		return $this;
	}
	}