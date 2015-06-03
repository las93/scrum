<?php
	
/**
 * Entity to statut
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
 * Entity to statut
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
class statut extends Entity 
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
	 * color
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $color = null;
	
	/**
	 * get id of statut
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of statut
	 *
	 * @access public
	 * @param  int $id id of statut
	 * @return \Venus\src\Front\Entity\statut
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get name of statut
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of statut
	 *
	 * @access public
	 * @param  string $name name of statut
	 * @return \Venus\src\Front\Entity\statut
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	 * get id_role of statut
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_role()
	{
		return $this->id_role;
	}

	/**
	 * set id_role of statut
	 *
	 * @access public
	 * @param  int $id_role id_role of statut
	 * @return \Venus\src\Front\Entity\statut
	 */
	public function set_id_role($id_role) 
	{
		$this->id_role = $id_role;
		return $this;
	}
	
	/**
	 * get role entity join by id_role of statut
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\statut
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
	 * set role entity join by id_role of statut
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\role  $role role entity
	 * @join
	 * @return \Venus\src\Front\Entity\statut
	 */
	public function set_role(\Venus\src\Front\Entity\role $role)
	{
		$this->role = $role;
		return $this;
	}

	/**
	 * get color of statut
	 *
	 * @access public
	 * @return string
	 */
	public function get_color()
	{
		return $this->color;
	}

	/**
	 * set color of statut
	 *
	 * @access public
	 * @param  string $color color of statut
	 * @return \Venus\src\Front\Entity\statut
	 */
	public function set_color($color) 
	{
		$this->color = $color;
		return $this;
	}
	}