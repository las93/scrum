<?php
	
/**
 * Entity to project
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
 * Entity to project
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
class project extends Entity 
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
	 * parent_id
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $parent_id = null;
	
	/**
	 * type
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $type = null;
	
	/**
	 * name
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $name = null;
	
	/**
	 * content
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $content = null;
	
	/**
	 * id_user_assign
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_user_assign = null;
	
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
	 * get id of project
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of project
	 *
	 * @access public
	 * @param  int $id id of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get parent_id of project
	 *
	 * @access public
	 * @return int
	 */
	public function get_parent_id()
	{
		return $this->parent_id;
	}

	/**
	 * set parent_id of project
	 *
	 * @access public
	 * @param  int $parent_id parent_id of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_parent_id($parent_id) 
	{
		$this->parent_id = $parent_id;
		return $this;
	}
	
	/**
	 * get type of project
	 *
	 * @access public
	 * @return string
	 */
	public function get_type()
	{
		return $this->type;
	}

	/**
	 * set type of project
	 *
	 * @access public
	 * @param  string $type type of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_type($type) 
	{
		$this->type = $type;
		return $this;
	}
	
	/**
	 * get name of project
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of project
	 *
	 * @access public
	 * @param  string $name name of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	 * get content of project
	 *
	 * @access public
	 * @return string
	 */
	public function get_content()
	{
		return $this->content;
	}

	/**
	 * set content of project
	 *
	 * @access public
	 * @param  string $content content of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_content($content) 
	{
		$this->content = $content;
		return $this;
	}
	
	/**
	 * get id_user_assign of project
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_user_assign()
	{
		return $this->id_user_assign;
	}

	/**
	 * set id_user_assign of project
	 *
	 * @access public
	 * @param  int $id_user_assign id_user_assign of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_id_user_assign($id_user_assign) 
	{
		$this->id_user_assign = $id_user_assign;
		return $this;
	}
	
	/**
	 * get user entity join by id_user_assign of project
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\project
	 */
	public function get_user($aWhere = array())
	{
		if ($this->user === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('user');
												   
	        $aWhere['id'] = $this->get_id_user_assign();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity');

          if (count($aResult) > 0) { $this->user = $aResult[0]; }
          else { $this->user = array(); }
        }

		return $this->user;
	}
	
	/**
	 * set user entity join by id_user_assign of project
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\user  $user user entity
	 * @join
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_user(\Venus\src\Front\Entity\user $user)
	{
		$this->user = $user;
		return $this;
	}
}