<?php
	
/**
 * Entity to statut_link
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
 * Entity to statut_link
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
class statut_link extends Entity 
{
	/**
	 * id_statut_source
	 *
	 * @access private
	 * @var    int
	 *
	 * @primary_key
	 */
    private $id_statut_source = null;
	
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
	 * id_statut_recipient
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_statut_recipient = null;
	
	/**
	 * statut2 Entity
	 *
	 * @access private
	 * @var    statut
	 * @join
	 *
	 */
    private $statut2 = null;
	
	
	
	/**
	 * get id_statut_source of statut_link
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_statut_source()
	{
		return $this->id_statut_source;
	}

	/**
	 * set id_statut_source of statut_link
	 *
	 * @access public
	 * @param  int $id_statut_source id_statut_source of statut_link
	 * @return \Venus\src\Front\Entity\statut_link
	 */
	public function set_id_statut_source($id_statut_source) 
	{
		$this->id_statut_source = $id_statut_source;
		return $this;
	}
	
	/**
	 * get statut entity join by id_statut_source of statut_link
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\statut_link
	 */
	public function get_statut($aWhere = array())
	{
		if ($this->statut === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('statut');
												   
	        $aWhere['id'] = $this->get_id_statut_source();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->statut = $aResult[0]; }
          else { $this->statut = array(); }
        }

		return $this->statut;
	}
	
	/**
	 * set statut entity join by id_statut_source of statut_link
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
	 * get id_statut_recipient of statut_link
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_statut_recipient()
	{
		return $this->id_statut_recipient;
	}

	/**
	 * set id_statut_recipient of statut_link
	 *
	 * @access public
	 * @param  int $id_statut_recipient id_statut_recipient of statut_link
	 * @return \Venus\src\Front\Entity\statut_link
	 */
	public function set_id_statut_recipient($id_statut_recipient) 
	{
		$this->id_statut_recipient = $id_statut_recipient;
		return $this;
	}
	
	/**
	 * get statut2 entity join by id_statut_recipient of statut_link
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\statut_link
	 */
	public function get_statut2($aWhere = array())
	{
		if ($this->statut2 === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('statut');
												   
	        $aWhere['id'] = $this->get_id_statut_recipient();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->statut = $aResult[0]; }
          else { $this->statut = array(); }
        }

		return $this->statut2;
	}
	
	/**
	 * set statut2 entity join by id_statut_recipient of statut_link
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\statut  $statut2 statut entity
	 * @join
	 * @return \Venus\src\Front\Entity\statut_link
	 */
	public function set_statut2(\Venus\src\Front\Entity\statut $statut2)
	{
		$this->statut2 = $statut2;
		return $this;
	}
}