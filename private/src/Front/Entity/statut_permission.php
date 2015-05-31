<?php
	
/**
 * Entity to statut_permission
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
 * Entity to statut_permission
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
class statut_permission extends Entity 
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
	 * id_statut
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_statut = null;
	
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
	 * get id of statut_permission
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of statut_permission
	 *
	 * @access public
	 * @param  int $id id of statut_permission
	 * @return \Venus\src\Front\Entity\statut_permission
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get id_statut of statut_permission
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_statut()
	{
		return $this->id_statut;
	}

	/**
	 * set id_statut of statut_permission
	 *
	 * @access public
	 * @param  int $id_statut id_statut of statut_permission
	 * @return \Venus\src\Front\Entity\statut_permission
	 */
	public function set_id_statut($id_statut) 
	{
		$this->id_statut = $id_statut;
		return $this;
	}
	
	/**
	 * get statut entity join by id_statut of statut_permission
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\statut_permission
	 */
	public function get_statut($aWhere = array())
	{
		if ($this->statut === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('statut');
												   
	        $aWhere['id'] = $this->get_id_statut();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity');

          if (count($aResult) > 0) { $this->statut = $aResult[0]; }
          else { $this->statut = array(); }
        }

		return $this->statut;
	}
	
	/**
	 * set statut entity join by id_statut of statut_permission
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\statut  $statut statut entity
	 * @join
	 * @return \Venus\src\Front\Entity\statut_permission
	 */
	public function set_statut(\Venus\src\Front\Entity\statut $statut)
	{
		$this->statut = $statut;
		return $this;
	}

	/**
	 * get id_role of statut_permission
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_role()
	{
		return $this->id_role;
	}

	/**
	 * set id_role of statut_permission
	 *
	 * @access public
	 * @param  int $id_role id_role of statut_permission
	 * @return \Venus\src\Front\Entity\statut_permission
	 */
	public function set_id_role($id_role) 
	{
		$this->id_role = $id_role;
		return $this;
	}
	
	/**
	 * get role entity join by id_role of statut_permission
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\statut_permission
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
	 * set role entity join by id_role of statut_permission
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\role  $role role entity
	 * @join
	 * @return \Venus\src\Front\Entity\statut_permission
	 */
	public function set_role(\Venus\src\Front\Entity\role $role)
	{
		$this->role = $role;
		return $this;
	}
}