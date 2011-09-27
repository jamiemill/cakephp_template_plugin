<?php

class DenormalizedItemFixture extends CakeTestFixture {

	var $name = 'DenormalizedItem';

	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'denormalized_item_parent_id' => array('type' => 'integer', 'null' => false),
		'title' => array('type' => 'string', 'null' => false),
		'body' => 'text',
		'value' => array('type' => 'integer', 'null' => false),
		'created' => 'datetime',
		'updated' => 'datetime'
	);

	var $records = array(
		array('denormalized_item_parent_id' => 1, 'title' => 'First Reportable', 'body' => 'First Reportable Body', 'value' => '10', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('denormalized_item_parent_id' => 1, 'title' => 'Second Reportable', 'body' => 'Second Reportable Body', 'value' => '5', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('denormalized_item_parent_id' => 2, 'title' => 'Third Reportable', 'body' => 'Third Reportable Body', 'value' => '0', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
	);
}

?>