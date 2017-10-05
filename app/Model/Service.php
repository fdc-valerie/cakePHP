<?php 

class Service extends AppModel{
	public $validate = array(
		'title' => array(
			'rule' => 'notBlank',
			'message' => 'This field is required'
			),
		'description' => array(
			'rule' => 'notBlank',
			'message' => 'This field is required'
			),
		'date' => array(
			'rule' => 'notBlank',
			'message' => 'This field is required'
			)
		);
}

 ?>