<?php

/**
 * Batch that create entity
 *
 * @category  	src
 * @package   	src\Batch\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	http://www.iscreenway.com/framework/licence.php Tout droit réservé à http://www.iscreenway.com
 * @version   	Release: 2.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	2.0.0
 *
 * @tutorial    You could launch this Batch in /private/
 * 				php launch.php scaffolding -p [portal]
 * 				-p [portal] => it's the name where you want add your entities and models
 * 				-r [rewrite] => if we force rewrite file
 * 					by default, it's Batch
 */
namespace Venus\src\Batch\Controller;

use \Venus\core\Config as Config;
use \Attila\Batch\Entity as BatchEntity;
use \Venus\src\Batch\common\Controller as Controller;

/**
 * Batch that create entity
 *
 * @category  	src
 * @package   	src\Batch\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	http://www.iscreenway.com/framework/licence.php Tout droit réservé à http://www.iscreenway.com
 * @version   	Release: 2.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	2.0.0
 */
class Entity extends Controller
{
	/**
	 * run the batch to create entity
	 * @tutorial launch.php scaffolding
	 *
	 * @access public
	 * @param  array $aOptions options of script
	 * @param  string $sRewrite rewrite or not the file (no/yes)
	 * @return void
	 */
	public function runScaffolding(array $aOptions = array())
	{
	    if (isset($aOptions['p'])) { $sPortail = $aOptions['p']; }
	    else { $sPortail = 'Batch'; }
	    
	    $aOptions['b'] = json_encode(Config::get('Db', $aOptions['p']));
	    
	    $aOptions['g'] = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.$aOptions['p'].DIRECTORY_SEPARATOR.'Entity'.DIRECTORY_SEPARATOR;
	    
	    $aOptions['h'] = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.$aOptions['p'].DIRECTORY_SEPARATOR.'Model'.DIRECTORY_SEPARATOR;
	    
	    define('ENTITY_NAMESPACE', '\Venus\src\\'.$aOptions['p'].'\Entity');
	    define('MODEL_NAMESPACE', '\Venus\src\\'.$aOptions['p'].'\Model');
	    
	    $oBatch = new BatchEntity;
	    $oBatch->runScaffolding($aOptions);
	}
}