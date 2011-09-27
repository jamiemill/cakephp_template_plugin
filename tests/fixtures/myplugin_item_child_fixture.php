<?php

class MypluginItemChildFixture extends CakeTestFixture {

	var $name = 'MypluginItemChild';

	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'myplugin_item_id' => array('type' => 'integer', 'null' => false),
		'title' => array('type' => 'string', 'null' => false),
		'body' => 'text',
		'value' => array('type' => 'integer', 'null' => false),
		'created' => 'datetime',
		'updated' => 'datetime'
	);

	var $records = array(
		array('myplugin_item_id' => 1, 'title' => 'First Reportable Child', 'body' => 'First Reportable Child Body', 'value' => '13', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('myplugin_item_id' => 1, 'title' => 'Second Reportable Child', 'body' => 'Second Reportable Child Body', 'value' => '12', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('myplugin_item_id' => 2, 'title' => 'Third Reportable Child', 'body' => 'Third Reportable Child Body', 'value' => '14', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
	);
}

?>