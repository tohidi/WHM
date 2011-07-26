<?php
class PostsController extends AppController {

	var $name = 'Posts';
	
	 /** 
     * Before any Controller Action 
     */  
    function beforeFilter() {  
         parent::beforeFilter();  
     }  

	function index() {
		$this->Post->recursive = 0;
		$posts = $this->Post->find('all');
		if ( isset($this->params['requested']) && $this->params['requested'] == 1){
      return $posts;
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
	
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid post', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('post', $this->Post->read(null, $id));
	}

	function admin_add() {
	/*
		if (!empty($this->data)) {
			$this->Post->create();
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash(__('The post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.', true));
			}
		}*/
	}

	function admin_edit($id = null) {
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
	}

	function admin_delete($id = null) {
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
		$this->redirect(array('action' => 'index'));
		*/
	}
}
?>