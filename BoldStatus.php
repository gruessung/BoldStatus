<?php

class BoldStatusPlugin extends MantisPlugin {
	
	function register() {
		$this->name = 'BoldStatus';
		$this->description = 'make current status bold and center';
		$this->page = '';
		
		$this->version = '0.1';
		$this->requires = array('MantisCore' => '2.0.0');
		
		$this->author = 'Alexander Grüßung';
		$this->contact = 'feedback@gruessung.eu';
		$this->url = 'https://gruessung.eu';
	}
	
	function hooks() {
		return array(
			'EVENT_LAYOUT_CONTENT_BEGIN' => 'scripts'
		);
	}
	
	function scripts() {
		echo '<script type="text/javascript" src="'.plugin_file('BoldStatus.js').'"></script>';
	}
}
?>
