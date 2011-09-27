<?php 

require_once(dirname(__FILE__).DS.'..'.DS.'test_models.php');

class DenormalizedBehaviorTestCase extends CakeTestCase {
	
	var $fixtures = array(
		'plugin.denormalized.denormalized_item',
		'plugin.denormalized.denormalized_item_parent',
		'plugin.denormalized.denormalized_item_grandparent',
		'plugin.denormalized.denormalized_item_child'
	);
	
	var $DenormalizedItem = null;

	function startCase() {
		$this->DenormalizedItem =& new DenormalizedItem();
	}
	
}
?>
