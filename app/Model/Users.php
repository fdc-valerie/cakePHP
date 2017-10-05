<?php 

class Users extends AppModel{
	public $validate= 
	array(
		'first_name'=>array(
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'This field is required'
			),
		'middle_name' => array(
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'This field is required'
			),
		'last_name' => array(
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'This field is required'
			),
		'username' => array(
			'required' => array(
				'rule' => 'notBlank',
				'message' => 'This field is required'
				),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'This username is already taken!'
			)
		),
		
		'password' => array(
			'required' => true,
			'rule' => 'notBlank',
			'message' => 'This field is required'
			) 
		);
}

 ?>


