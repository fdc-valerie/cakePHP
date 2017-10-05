<?php 

class Pet extends AppModel{
	public $validate = array(
		'name' => array(
			'rule' => 'notBlank',
			'required' => true,
			'message' => 'This field cannot be empty'
		),
		'breed' => array(
			'rule' => 'notBlank',
			'required' => true,
			'message' => 'This field cannot be empty'
		),
		'age' => array(
			'rule' => 'notBlank',
			'required' => true,
			'message' => 'This field cannot be empty'
		),
		'gender' => array(
			'rule' => 'notBlank',
			'required' => true,
			'message' => 'This field cannot be empty'
		),
		'species' => array(
			'rule' => 'notBlank',
			'required' => true,
			'message' => 'This field cannot be empty'

		),
		'pet_picture' => array(
			'required' => true,
			'rule' => array(
	            'extension',
	            array('gif', 'jpeg', 'png', 'jpg')     
	        ),
        		'message' => 'Please supply a valid image.'
		)

	);
}

 ?>