<?php
class notfoundController extends controller {

	public function __construct(){
		if (empty($_SESSION['lg'])) {
			header('Location: '.BASE.'login');
		}
	}

	public function index() {

		
		$this->loadTemplate('404');
	}
}