<?php

class DenormalizedItemParentFixture extends CakeTestFixture {

	var $name = 'DenormalizedItemParent';

	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'denormalized_item_grandparent_id' => array('type' => 'integer', 'null' => false),
		'title' => array('type' => 'string', 'null' => false),
		'body' => 'text',
		'value' => array('type' => 'integer', 'null' => false),
		'created' => 'datetime',
		'updated' => 'datetime'
	);

	var $records = array(
		array('denormalized_item_grandparent_id' => 1, 'title' => 'First Reportable Parent', 'body' => 'First Reportable Parent Body', 'value' => '1', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('denormalized_item_grandparent_id' => 1, 'title' => 'Second Reportable Parent', 'body' => 'Second Reportable Parent Body', 'value' => '0', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('denormalized_item_grandparent_id' => 2, 'title' => 'Third Reportable Parent', 'body' => 'Third Reportable Parent Body', 'value' => '2', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
	);
}

?>