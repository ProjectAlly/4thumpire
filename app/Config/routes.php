<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */

	//Router::connect('/', array('controller' => 'home', 'action' => 'index', 'home'));
	
	// CLUB SPECIFIC URLs	
	
	Router::connect('/:club/admin',
					array('prefix' =>'admin', 'admin'=>'true', 'controller'=>'Users'), 
					array('club' => '[a-z0-9_-]+', 'pass' => array('club')));
	
	Router::connect('/:club/admin/:controller', 
					array('prefix' =>'admin', 'admin'=>'true', 'action'=>'index'), 
					array('club' => '[a-z0-9_-]+', 'pass' => array('club')));
	
	Router::connect('/:club/admin/:controller/:action', 
					array('prefix' =>'admin', 'admin'=>'true'), 
					array('club' => '[a-z0-9_-]+', 'pass' => array('club')));

	Router::connect('/:club/admin/:controller/:action/:id', 
					array('prefix' =>'admin', 'admin'=>'true'), 
					array('club' => '[a-z0-9_-]+', 'id'=>'[0-9]+', 'pass' => array('club', 'id')));
					
					
	Router::connect('/:club', 
					array('controller' => 'ClubHome', 'action' =>'index'), 
					array('club' => '[a-z0-9_-]+', 'pass' => array('club')));
					
	Router::connect('/:club/:controller', 
					array('action' =>'index'), 
					array('club' => '[a-z0-9_-]+', 'pass' => array('club')));
	

	Router::connect('/', array('controller'=>'Home', 'action' => 'index'));
	Router::connect('/:action', array('controller'=>'Home'));

	Router::parseExtensions();
	
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
?>