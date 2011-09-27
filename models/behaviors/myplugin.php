<?php

class MypluginBehavior extends ModelBehavior {
	
	var $_defaults = array();

	function setup(&$model, $config = array()) {
		$this->settings[$model->name] = am ($this->_defaults,$config);
	}

}
?>
