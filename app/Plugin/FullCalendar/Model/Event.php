<?php
/*
 * Model/Event.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
class Event extends FullCalendarAppModel {
	var $name = 'Event';
	var $displayField = 'title';
	var $validate = array(
		'title' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
		),
		'start' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
		),
		'end' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
		),
	);

	var $belongsTo = array(
		'EventType' => array(
			'className' => 'FullCalendar.EventType',
			'foreignKey' => 'event_type_id'
		),
	);

}
?>
