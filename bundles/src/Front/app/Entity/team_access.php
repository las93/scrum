<?php
	
/**
 * Entity to team_access
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
 * Entity to team_access
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
class team_access extends Entity 
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
	 * team Entity
	 *
	 * @access private
	 * @var    team
	 * @join
	 *
	 */
    private $team = null;
	
	
	
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
	 * access Entity
	 *
	 * @access private
	 * @var    access
	 * @join
	 *
	 */
    private $access = null;
	
	
	
	/**
	 * get id_team of team_access
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_team()
	{
		return $this->id_team;
	}

	/**
	 * set id_team of team_access
	 *
	 * @access public
	 * @param  int $id_team id_team of team_access
	 * @return \Venus\src\Front\Entity\team_access
	 */
	public function set_id_team($id_team) 
	{
		$this->id_team = $id_team;
		return $this;
	}
	
	/**
	 * get team entity join by id_team of team_access
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\team_access
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
	 * set team entity join by id_team of team_access
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\team  $team team entity
	 * @join
	 * @return array
	 */
	public function set_team(array $team)
	{
		$this->team = $team;
		return $this;
	}

	/**
	 * get id_access of team_access
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_access()
	{
		return $this->id_access;
	}

	/**
	 * set id_access of team_access
	 *
	 * @access public
	 * @param  int $id_access id_access of team_access
	 * @return \Venus\src\Front\Entity\team_access
	 */
	public function set_id_access($id_access) 
	{
		$this->id_access = $id_access;
		return $this;
	}
	
	/**
	 * get access entity join by id_access of team_access
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\team_access
	 */
	public function get_access($aWhere = array())
	{
		if ($this->access === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('access');
												   
	        $aWhere['id'] = $this->get_id_access();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->access = $aResult[0]; }
          else { $this->access = array(); }
        }

		return $this->access;
	}
	
	/**
	 * set access entity join by id_access of team_access
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\access  $access access entity
	 * @join
	 * @return array
	 */
	public function set_access(array $access)
	{
		$this->access = $access;
		return $this;
	}
}