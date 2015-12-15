<?php
	
/**
 * Entity to sprint
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
 * Entity to sprint
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
class sprint extends Entity 
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
	 * number
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $number = null;
	
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
	 * get id of sprint
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of sprint
	 *
	 * @access public
	 * @param  int $id id of sprint
	 * @return \Venus\src\Front\Entity\sprint
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get number of sprint
	 *
	 * @access public
	 * @return int
	 */
	public function get_number()
	{
		return $this->number;
	}

	/**
	 * set number of sprint
	 *
	 * @access public
	 * @param  int $number number of sprint
	 * @return \Venus\src\Front\Entity\sprint
	 */
	public function set_number($number) 
	{
		$this->number = $number;
		return $this;
	}
	
	/**
	 * get id_team of sprint
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_team()
	{
		return $this->id_team;
	}

	/**
	 * set id_team of sprint
	 *
	 * @access public
	 * @param  int $id_team id_team of sprint
	 * @return \Venus\src\Front\Entity\sprint
	 */
	public function set_id_team($id_team) 
	{
		$this->id_team = $id_team;
		return $this;
	}
	
	/**
	 * get team entity join by id_team of sprint
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\sprint
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
	 * set team entity join by id_team of sprint
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\team  $team team entity
	 * @join
	 * @return \Venus\src\Front\Entity\sprint
	 */
	public function set_team(\Venus\src\Front\Entity\team $team)
	{
		$this->team = $team;
		return $this;
	}
}