<?php
class AppController extends Controller {
			
			var $helpers = array('Ajax', 'Javascript', 'Time', 'Form', 'Html', 'Session');
			
	function beforeFilter() {
		// if an admin route is requested and not logged in
		$user = $this->Session->read('User');
		if(isset($this->params['admin']) && $this->params['admin'] && is_null($user)) {
			// set Flash and redirect to login page
			$this->Session->setFlash('You need to be logged for that action.','default',array('class'=>'flash_bad'));
			$this->redirect(array('controller'=>'users','action'=>'login','admin'=>FALSE));
			
		}
		else if(isset($this->params['admin']) && $this->params['admin']){
		$this->layout = 'admin'; 
		}
		
	}
}