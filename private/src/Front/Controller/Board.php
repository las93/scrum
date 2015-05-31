<?php

/**
 * Controller to test
 *
 * @category  	Venus\src
 * @package   	Venus\src\Front\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2015 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/scrum/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/scrum
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\Front\Controller;

use \Venus\src\Front\common\Controller  as Controller;
use \Venus\src\Front\Model\board        as ModelBoard;
use \Venus\src\Front\Model\board_part   as BoardPart;

/**
 * Controller to test
 *
 * @category    Venus\src
 * @package     Venus\src\Front\Controller
 * @author      Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright   Copyright (c) 2013-2015 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license     https://github.com/las93/scrum/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version     Release: 1.0.0
 * @filesource  https://github.com/las93/scrum
 * @link        https://github.com/las93
 * @since       1.0
 */
class Board extends Controller
{
    /**
     * Constructor
     *
     * @access public
     * @return object
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * the main page
     *
     * @access public
     * @param  int $iIdBoard
     * @return void
     */
    public function show($iIdBoard = 2)
    {
        $oBoardPart = new BoardPart;
        $aBoardPart = $oBoardPart->findByid_board($iIdBoard);
        
        $oBoard = new ModelBoard;
        $aBoard = $oBoard->findAll();
        
        $this->layout
             ->assign('aBoardPart', $aBoardPart)
             ->assign('aBoard', $aBoard)
             ->display();
    }
}