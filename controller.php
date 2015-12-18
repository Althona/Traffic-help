<?php

namespace Controller;

require_once 'view.php';

class Controller{
	
	private $ViewClass;
	
	public function __construct(){
		
		$this->ViewClass = new \View\View();
		$this->controller();
	}
		
	private function controller(){
		
		$this->ViewClass->showHTML();
	}
}
?>