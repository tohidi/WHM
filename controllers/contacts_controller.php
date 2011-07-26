<?php
class ContactsController extends AppController {

	var $name = 'Contacts';
	
	 /** 
     * Before any Controller Action 
     */  
    function beforeFilter() {  
         parent::beforeFilter();  
     }  

	function index() {
		$this->Contact->recursive = 0;
		$contacts = $this->Contact->find('all');
		if ( isset($this->params['requested']) && $this->params['requested'] == 1){
      return $contacts;
    }
    else{
	$this->redirect(array('controller'=>'users','action'=>'login','admin'=>FALSE));
    // $this->set('posts', $posts);
    }
		
	}

	
	
	function contact() {
	
		if (!empty($this->data)) {
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('<div style="clear: both; color: #fff; font-size: 140%; font-weight: bold; margin: 0 0 1em 0; background: #8dc63f; padding: 5px;">Your Message Has Been Sent, Thanks.</div>', true));
				$this->redirect(array('controller'=>'pages','action'=>'about'));
			} else {
				$this->Session->setFlash(__('<div style="clear: both; color: #fff; font-size: 140%; font-weight: bold;margin: 0 0 1em 0;background: #9e0b0f;padding: 5px;">Sorry, Your message was not sent. Please fill in all the fields. Thanks..</div>', true));
				$this->redirect(array('controller'=>'pages','action'=>'contact'));
			}
		}
		
	}
	function admin_index() {
	
		$this->Event->recursive = 0;
		$this->set('contacts', $this->paginate());
	}

	
}
?>