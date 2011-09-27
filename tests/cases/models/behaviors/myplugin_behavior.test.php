<?php 

require_once(dirname(__FILE__).DS.'..'.DS.'test_models.php');

class MypluginBehaviorTestCase extends CakeTestCase {
	
	var $fixtures = array(
		'plugin.myplugin.myplugin_item',
		'plugin.myplugin.myplugin_item_parent',
		'plugin.myplugin.myplugin_item_grandparent',
		'plugin.myplugin.myplugin_item_child'
	);
	
	var $MypluginItem = null;

	function startCase() {
		$this->MypluginItem =& new MypluginItem();
	}
	
}
?>
