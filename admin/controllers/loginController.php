<?php
class loginController extends controller {
	public function __construct(){
		if (!empty($_SESSION['lg'])) {
			header('Location: '.BASE);
		}
	}

	public function index() {
		$dados = array();

		$u = new User();

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		if (!empty($post)) {
			if ($u->login($post)) {
				header('Location: '.BASE);
			} else {
				$dados['alert'] = '<div class="alert alert-danger">Login e/ou senha incorretos - Vendedor inativado no sistema</div>';
			}
		}

		$this->loadView('login', $dados);
	}
}