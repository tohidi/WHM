<?php
class ContactController extends AppController
{
	var $name = 'Contact';
	var $uses = 'Contact';
	var $helpers = array('Html', 'Form', 'Javascript');
	var $components = array('Email', 'Session');
	function index(){
		if(isset($this->data)) {
			$this->Contact->create($this->data);
			// There is no save(), so we need to validate manually.
			if($this->Contact->validates()){
				$this->Email->to = Configure::read('james.pellizzi@gmail.com');
				$this->Email->replyTo = $this->data['Contact']['email'];
				$this->Email->from = $this->data['Contact']['name'].' <'.$this->data['Contact']['email'].'>';
				$this->Email->subject = 'Contact Form: '.$this->data['Contact']['subject'];
				$this->Email->delivery = 'debug';
				if ($this->Email->send($this->data['Contact']['message'])) {
					$this->Session->setFlash('Thank you for contacting us');
					//$this->redirect('/');
				} else {
					$this->Session->setFlash('Sorry, This Message Was Not Sent.');
				}
				//$this->redirect('/pages/contact');
			} else {
				$this->Session->setFlash('Please Fill Out the Form Completley.');
				//$this->redirect('/contacts');
			}
		}
	}
}

?>
