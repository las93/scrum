<?php
	
/**
 * Entity to board_part
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
 * Entity to board_part
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
class board_part extends Entity 
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
	 * id_board
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_board = null;
	
	/**
	 * board Entity
	 *
	 * @access private
	 * @var    board
	 * @join
	 *
	 */
    private $board = null;
	
	
	
	/**
	 * name
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $name = null;
	
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
	 * order
	 *
	 * @access private
	 * @var    int
	 *
	 * @primary_key
	 */
    private $order = null;
	
	/**
	 * get id of board_part
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of board_part
	 *
	 * @access public
	 * @param  int $id id of board_part
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get id_board of board_part
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_board()
	{
		return $this->id_board;
	}

	/**
	 * set id_board of board_part
	 *
	 * @access public
	 * @param  int $id_board id_board of board_part
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function set_id_board($id_board) 
	{
		$this->id_board = $id_board;
		return $this;
	}
	
	/**
	 * get board entity join by id_board of board_part
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function get_board($aWhere = array())
	{
		if ($this->board === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('board');
												   
	        $aWhere['id'] = $this->get_id_board();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->board = $aResult[0]; }
          else { $this->board = array(); }
        }

		return $this->board;
	}
	
	/**
	 * set board entity join by id_board of board_part
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\board  $board board entity
	 * @join
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function set_board(\Venus\src\Front\Entity\board $board)
	{
		$this->board = $board;
		return $this;
	}

	/**
	 * get name of board_part
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of board_part
	 *
	 * @access public
	 * @param  string $name name of board_part
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	 * get id_statut of board_part
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_statut()
	{
		return $this->id_statut;
	}

	/**
	 * set id_statut of board_part
	 *
	 * @access public
	 * @param  int $id_statut id_statut of board_part
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function set_id_statut($id_statut) 
	{
		$this->id_statut = $id_statut;
		return $this;
	}
	
	/**
	 * get statut entity join by id_statut of board_part
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function get_statut($aWhere = array())
	{
		if ($this->statut === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('statut');
												   
	        $aWhere['id'] = $this->get_id_statut();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\Front\Entity\\');

          if (count($aResult) > 0) { $this->statut = $aResult[0]; }
          else { $this->statut = array(); }
        }

		return $this->statut;
	}
	
	/**
	 * set statut entity join by id_statut of board_part
	 *
	 * @access public
	 * @param  \Venus\src\Front\Entity\statut  $statut statut entity
	 * @join
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function set_statut(\Venus\src\Front\Entity\statut $statut)
	{
		$this->statut = $statut;
		return $this;
	}

	/**
	 * get order of board_part
	 *
	 * @access public
	 * @return int
	 */
	public function get_order()
	{
		return $this->order;
	}

	/**
	 * set order of board_part
	 *
	 * @access public
	 * @param  int $order order of board_part
	 * @return \Venus\src\Front\Entity\board_part
	 */
	public function set_order($order) 
	{
		$this->order = $order;
		return $this;
	}
	}