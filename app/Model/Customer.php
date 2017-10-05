<?php 
class Customer extends AppModel{
public $validate = array(
	'first_name' => array(
		'rule' => 'notBlank',
    	'required' => true,
    	'message' => 'This field cannot be empty',
		),
	'last_name' => array(
		'rule' => 'notBlank',
    	'required' => true,
		'message' => 'This field cannot be empty'
		),
	'contact_no' => array(
		'rule' => 'notBlank',
		'required' => true,
		'message' => 'This field cannot be empty'
		),
	'address' => array(
		'rule' => 'notBlank',
		'required' => true,
		'message' => 'This field cannot be empty'	
		)
	);
}

 ?>

 