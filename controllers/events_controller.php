<?php
class EventsController extends AppController {

	var $name = 'Events';
	
	 /** 
     * Before any Controller Action 
     */  
    function beforeFilter() {  
         parent::beforeFilter();  
     }  

	function index() {
		$this->Event->recursive = 0;
		$events = $this->Event->find('all');
		if ( isset($this->params['requested']) && $this->params['requested'] == 1){
      return $events;
    }
    else{
	$this->redirect(array('controller'=>'users','action'=>'login','admin'=>FALSE));
    // $this->set('posts', $posts);
    }
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid post', true));
			$this->redirect(array('action' => 'index'));
		}
		$conditions = array();
    
      $conditions['Post.id'] = $id;
    

    $posts = $this->Post->find('all', array('conditions'=>$conditions));

    if ( isset($this->params['requested']) && $this->params['requested'] == 1){
      return $posts;
    }
    else{
	$this->redirect(array('controller'=>'users','action'=>'login','admin'=>FALSE));
      //$this->set('post', $this->Post->find(array('title', 'body'), $id));
    }
	}


	function add() {
	$this->redirect(array('controller'=>'users','action'=>'login','admin'=>FALSE));
	/*
		if (!empty($this->data)) {
			$this->Post->create();
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash(__('The post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.', true));
			}
		}
		*/
	}
	
	function monthschedule(){
	$results = $this->Event->query("select MONTHNAME(event_date) month, DAYOFMONTH(event_date) date, DAYNAME(event_date) dayname, 
	YEAR(event_date) year, title, description, location, DATE_FORMAT(event_time, '%I.%i%p') etime
	from events where YEAR(event_date) = YEAR(CURDATE()) AND MONTH(event_date) = MONTH(CURDATE()) order by event_date, event_time asc");
    return $results;
	}

	function edit($id = null) {
	/*
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid post', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash(__('The post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Post->read(null, $id);
		}
		*/
		$this->redirect(array('controller'=>'users','action'=>'login','admin'=>FALSE));
	}

	function delete($id = null) {
	$this->redirect(array('controller'=>'users','action'=>'login','admin'=>FALSE));
	/*
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for post', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Post->delete($id)) {
			$this->Session->setFlash(__('Post deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Post was not deleted', true));
		$this->redirect(array('action' => 'index'));*/
	}
	function admin_index() {
	
		$this->Event->recursive = 0;
		$this->set('events', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid event', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('event', $this->Post->read(null, $id));
	}

	function admin_add() {
	
		if (!empty($this->data)) {
			$this->Event->create();
			if ($this->Event->save($this->data)) {
				$this->Session->setFlash(__('The event has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Event->save($this->data)) {
				$this->Session->setFlash(__('The event has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Event->read(null, $id);
		}
	}

	function admin_delete($id = null) {
	
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Event->delete($id)) {
			$this->Session->setFlash(__('Event deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Event was not deleted', true));
		$this->redirect(array('action' => 'index'));
		
	}
}
?>