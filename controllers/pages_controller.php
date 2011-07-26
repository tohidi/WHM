<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Pages';

/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html');

/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @access public
 */
	function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
	
	function about(){ 
    $blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(1)));
	$this->set('post', $blogs);
	}
	
	function programs(){
	$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(6)));
	   $this->set('post', $blogs);
	}
	
	function tour(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(11)));
	   $this->set('post', $blogs);
	}
	
	function enroll(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(16)));
	   $this->set('post', $blogs);
	}
	
	function facility(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(5)));
	   $this->set('post', $blogs);
	}
	
	function history(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(2)));
	   $this->set('post', $blogs);
	}
	
	function staff(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(4)));
	   $this->set('post', $blogs);
	}
	
	function why_whm(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(3)));
	   $this->set('post', $blogs);
	}
	
		function home(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(20)));
	   $this->set('post', $blogs);
	}
	
	
	function forms(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(17)));
	   $this->set('post', $blogs);
	}
	
	function schedules(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(18)));
$sch = $this->requestAction(array('controller' => 'events', 'action' => 'monthschedule'), array('pass' => array(18)));
	   $this->set('post', $blogs);
	   $this->set('sch', $sch);
	}
	
	function ask_us(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(19)));
	   $this->set('post', $blogs);
	}
	
	function contact(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(20)));
	   $this->set('post', $blogs);
	}
	
	
	
	function toddler(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(7)));
	   $this->set('post', $blogs);
	}
	
	function preschool(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(8)));
	   $this->set('post', $blogs);
	}
	
	function kindergarten(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(9)));
	   $this->set('post', $blogs);
	}
	
	function elementary(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(10)));
	   $this->set('post', $blogs);
	}
	
	
	
	function classrooms(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(12)));
	   $this->set('post', $blogs);
	}
	
	function playground(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(13)));
	   $this->set('post', $blogs);
	}
	
	function nature_trail(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(14)));
	   $this->set('post', $blogs);
	}
	
	function living_pond(){
$blogs = $this->requestAction(array('controller' => 'posts', 'action' => 'view'), array('pass' => array(15)));
	   $this->set('post', $blogs);
	}
}
