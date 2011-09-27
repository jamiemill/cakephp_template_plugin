<?php

class MypluginItemGrandparentFixture extends CakeTestFixture {

	var $name = 'MypluginItemGrandparent';

	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false),
		'body' => 'text',
		'value' => array('type' => 'integer', 'null' => false),
		'created' => 'datetime',
		'updated' => 'datetime'
	);

	var $records = array(
		array('title' => 'First Reportable Grandparent', 'body' => 'First Reportable Grandparent Body', 'value' => '2', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('title' => 'Second Reportable Grandparent', 'body' => 'Second Reportable Grandparent Body', 'value' => '3', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('title' => 'Third Reportable Grandparent', 'body' => 'Third Reportable Grandparent Body', 'value' => '4', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
	);
}

?>