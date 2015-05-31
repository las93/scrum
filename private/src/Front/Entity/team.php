<?php
	
/**
 * Entity to team
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
 * Entity to team
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
class team extends Entity 
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
	 * name
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $name = null;
	
	/**
	 * get id of team
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of team
	 *
	 * @access public
	 * @param  int $id id of team
	 * @return \Venus\src\Front\Entity\team
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get user entity join by id of team
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
												   
	        $aWhere['id_team'] = $this->get_id();
											
													  
            $this->user = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity');
        }

		return $this->user;
	}
	
	/**
	 * set user entity join by id of team
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
	 * get name of team
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of team
	 *
	 * @access public
	 * @param  string $name name of team
	 * @return \Venus\src\Front\Entity\team
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	}