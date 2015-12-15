<?php

/**
 * Manage Response by Mock
 *
 * @category  	lib
 * @package		lib\Cache
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\lib\Response;

use \Venus\lib\Response\ResponseInterface as ResponseInterface;

/**
 * Manage Response by Mock
 *
 * @category  	lib
 * @package		lib\Cache
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
class Mock implements ResponseInterface
{
	/**
	 * translate the content
	 * @see \Venus\lib\Response\ResponseInterface::translate()
	 *
	 * @access public
	 * @param  mixed $mContent content to translate
	 * @return mixed
	 */
    public static function translate($mContent)
    {
        // TODO Auto-generated method stub
        return $mContent;
    }

}