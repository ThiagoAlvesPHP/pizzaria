<?php
class homeController extends controller {
	public function __construct(){
		if (empty($_SESSION['lg'])) {
			header('Location: '.BASE.'login');
		}
	}

	public function index() {
		$dados = array();
		$m = new Menu();

		$dados['menusTotal'] = $m->count();
		$this->loadTemplate('home', $dados);
	}

	public function mydados($id){
		$dados = array();
		$u = new User();

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		if (!empty($post)) {
			$post['id'] = $id;
			$u->up($post);
			echo '<script> alert("Alterado com Sucesso!"); window.location.href = "'.BASE.'home/mydados/'.$id.'"; </script>';
		}
			
		$dados['user'] = $u->get($id);
		$this->loadTemplate('mydados', $dados);
	}

	public function logout(){
		if (!empty($_SESSION['lg'])) {
			unset($_SESSION['lg']);
			header('Location: '.BASE.'login');
		}
	}
}