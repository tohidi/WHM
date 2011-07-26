<?php
class Contact extends AppModel {
	var $name = 'Contact';
	var $useTable = false;  // Not using the database, of course.

	// All the fancy validation you could ever want.
	var $validate = array(
	    'name' => array(
	        'rule' => '/.+/',
			'allowEmpty' => false,
	        'required' => true,
	    ),
		'subject' => array(
	        'rule' => array('minLength', 5),
			'message' => 'Subject must be 5 characters long'
	    ),
		'email' => array(
	        'rule' => 'email',
			'message' => 'Please enter a valid email address'
	    ),
	);

	// This is where the magic happens
	function schema() {
		return array (
			'name' => array('type' => 'string', 'length' => 60),
			'email' => array('type' => 'string', 'length' => 60),
			'message' => array('type' => 'text', 'length' => 2000),
			'subject' => array('type' => 'string', 'length' => 100),
		);
	}
}
?>