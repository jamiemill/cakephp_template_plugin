<?php

class MypluginItem extends CakeTestModel {
	var $actsAs = array('Containable','Myplugin.Myplugin');
	var $belongsTo = array('MypluginItemParent');
	var $hasMany = array('MypluginItemChild');
}

class MypluginItemChild extends CakeTestModel {
	var $actsAs = array('Containable','Myplugin.Myplugin');
	var $belongsTo = array('MypluginItem');
}

class MypluginItemParent extends CakeTestModel {
	var $actsAs = array('Containable','Myplugin.Myplugin');
	var $belongsTo = array('MypluginItemGrandparent');
	var $hasMany = array('MypluginItem');
}

class MypluginItemGrandparent extends CakeTestModel {
	var $actsAs = array('Containable','Myplugin.Myplugin');
	var $hasMany = array('MypluginItemParent');
}


?>