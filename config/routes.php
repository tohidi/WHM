<?php
/**
 * Routes Configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/pages/', array('controller' => 'pages', 'action' => 'display', 'home'));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/about', array('controller' => 'pages', 'action' => 'about'));
	Router::connect('/pages/programs', array('controller' => 'pages', 'action' => 'programs'));
	Router::connect('/pages/tour', array('controller' => 'pages', 'action' => 'tour'));
	Router::connect('/pages/enroll', array('controller' => 'pages', 'action' => 'enroll'));
	
	
	Router::connect('/pages/history', array('controller' => 'pages', 'action' => 'history'));
	Router::connect('/pages/why_whm', array('controller' => 'pages', 'action' => 'why_whm'));
	Router::connect('/pages/staff', array('controller' => 'pages', 'action' => 'staff'));
	Router::connect('/pages/facility', array('controller' => 'pages', 'action' => 'facility'));
	
	Router::connect('/pages/forms', array('controller' => 'pages', 'action' => 'forms'));
	Router::connect('/pages/calendar', array('controller' => 'pages', 'action' => 'calendar'));
	Router::connect('/pages/ask_us', array('controller' => 'pages', 'action' => 'ask_us'));
	Router::connect('/pages/contact', array('controller' => 'pages', 'action' => 'contact'));
	
	Router::connect('/pages/toddler', array('controller' => 'pages', 'action' => 'toddler'));
	Router::connect('/pages/preschool', array('controller' => 'pages', 'action' => 'preschool'));
	Router::connect('/pages/kindergarten', array('controller' => 'pages', 'action' => 'kindergarten'));
	Router::connect('/pages/elementary', array('controller' => 'pages', 'action' => 'elementary'));
	
	Router::connect('/pages/classrooms', array('controller' => 'pages', 'action' => 'classrooms'));
	Router::connect('/pages/playground', array('controller' => 'pages', 'action' => 'playground'));
	Router::connect('/pages/nature_trail', array('controller' => 'pages', 'action' => 'nature_trail'));
	Router::connect('/pages/living_pond', array('controller' => 'pages', 'action' => 'living_pond'));
	
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/register', array('controller' => 'users', 'action' => 'register'));
	
/* Router::connect('/users', array('controller' => 'users', 'action' => 'index', 'admin' => '1')); */
/*	Router::connect('/admin/', array('controller' => 'users', 'action' => 'index', 'prefix'=>'admin')); */