<?php
class webMakerPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'templateCommonHeader' => 'webMakerPlugin.addMenu'
		));
	}
	public function addMenu(){
		$config = $this->getConfig();
		$subMenu = $config['menuSubMenu'];
		navbar_menu_add(array(
			'name'		=> 'WebMaker',
			'icon'		=> $this->appIcon(),
			'url'		=> $this->pluginApi,
			'target'	=> '_blank',
			'subMenu'	=> $subMenu,
			'use'		=> '1'
		));
	}
	public function index(){
		header('Location: '.$this->pluginHost.'webMaker/');
	}
}