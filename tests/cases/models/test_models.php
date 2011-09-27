<?php

class DenormalizedItem extends CakeTestModel {
	var $actsAs = array('Containable','Denormalized.Denormalized');
	var $belongsTo = array('DenormalizedItemParent');
	var $hasMany = array('DenormalizedItemChild');
}

class DenormalizedItemChild extends CakeTestModel {
	var $actsAs = array('Containable','Denormalized.Denormalized');
	var $belongsTo = array('DenormalizedItem');
}

class DenormalizedItemParent extends CakeTestModel {
	var $actsAs = array('Containable','Denormalized.Denormalized');
	var $belongsTo = array('DenormalizedItemGrandparent');
	var $hasMany = array('DenormalizedItem');
}

class DenormalizedItemGrandparent extends CakeTestModel {
	var $actsAs = array('Containable','Denormalized.Denormalized');
	var $hasMany = array('DenormalizedItemParent');
}


?>