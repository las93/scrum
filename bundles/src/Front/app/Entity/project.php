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
	 * project Entity
	 *
	 * @access private
	 * @var    project
	 * @join
	 *
	 */
    private $project = null;
	
	
	
	/**
	 * parent_id
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $parent_id = null;
	
	/**
	 * parent Entity
	 *
	 * @access private
	 * @var    project
	 * @join
	 *
	 */
    private $parent = null;
	
	
	
	/**
	 * date_create
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $date_create = null;
	
	/**
	 * date_update
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $date_update = null;
	
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
	 * color
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $color = null;
	
	/**
	 * icon
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $icon = null;
	
	/**
	 * id_status
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_status = null;
	
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
	 * get project entity join by id of project
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return array
	 */
	public function get_project($aWhere = array())
	{
		if ($this->project === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('project');
												   
	        $aWhere['parent_id'] = $this->get_id();
											
													  
            $this->project = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');
        }

		return $this->project;
	}
	
	/**
	 * set project entity join by id of project
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\project  $project project entity
	 * @join
	 * @return array
	 */
	public function set_project(array $project)
	{
		$this->project = $project;
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
	 * get parent entity join by parent_id of project
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\project
	 */
	public function get_parent($aWhere = array())
	{
		if ($this->parent === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('project');
												   
	        $aWhere['id'] = $this->get_parent_id();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->parent = $aResult[0]; }
          else { $this->parent = array(); }
        }

		return $this->parent;
	}
	
	/**
	 * set parent entity join by parent_id of project
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\project  $parent project entity
	 * @join
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_parent(\Venus\src\Front\Entity\project $parent)
	{
		$this->parent = $parent;
		return $this;
	}

	/**
	 * get date_create of project
	 *
	 * @access public
	 * @return string
	 */
	public function get_date_create()
	{
		return $this->date_create;
	}

	/**
	 * set date_create of project
	 *
	 * @access public
	 * @param  string $date_create date_create of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_date_create($date_create) 
	{
		$this->date_create = $date_create;
		return $this;
	}
	
	/**
	 * get date_update of project
	 *
	 * @access public
	 * @return string
	 */
	public function get_date_update()
	{
		return $this->date_update;
	}

	/**
	 * set date_update of project
	 *
	 * @access public
	 * @param  string $date_update date_update of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_date_update($date_update) 
	{
		$this->date_update = $date_update;
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
						           ->load(false, '\Venus\src\Front\Entity\\');

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

	/**
	 * get color of project
	 *
	 * @access public
	 * @return string
	 */
	public function get_color()
	{
		return $this->color;
	}

	/**
	 * set color of project
	 *
	 * @access public
	 * @param  string $color color of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_color($color) 
	{
		$this->color = $color;
		return $this;
	}
	
	/**
	 * get icon of project
	 *
	 * @access public
	 * @return string
	 */
	public function get_icon()
	{
		return $this->icon;
	}

	/**
	 * set icon of project
	 *
	 * @access public
	 * @param  string $icon icon of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_icon($icon) 
	{
		$this->icon = $icon;
		return $this;
	}
	
	/**
	 * get id_status of project
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_status()
	{
		return $this->id_status;
	}

	/**
	 * set id_status of project
	 *
	 * @access public
	 * @param  int $id_status id_status of project
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_id_status($id_status) 
	{
		$this->id_status = $id_status;
		return $this;
	}
	
	/**
	 * get statut entity join by id_status of project
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\project
	 */
	public function get_statut($aWhere = array())
	{
		if ($this->statut === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('statut');
												   
	        $aWhere['id'] = $this->get_id_status();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->statut = $aResult[0]; }
          else { $this->statut = array(); }
        }

		return $this->statut;
	}
	
	/**
	 * set statut entity join by id_status of project
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\statut  $statut statut entity
	 * @join
	 * @return \Venus\src\Front\Entity\project
	 */
	public function set_statut(\Venus\src\Front\Entity\statut $statut)
	{
		$this->statut = $statut;
		return $this;
	}
}