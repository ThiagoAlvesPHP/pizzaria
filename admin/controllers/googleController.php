<?php
class googleController extends controller {
	public function __construct(){
		if (empty($_SESSION['lg'])) {
			header('Location: '.BASE.'login');
		}
	}

	public function index() {
		$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);
		if (!empty($get['tracking'])) {
			$dados = array();
			$t = new Tracking();
			$dados['script'] = $t->getVerify(2);

			$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

			if (!empty($post)) {
				$post['verify'] = 2;
				if (!empty($post['up'])) {
					$t->up($post);
					echo '<script> alert("Alterado com Sucesso!"); window.location.href = "'.BASE.'google?tracking=2"; </script>';
				} else {
					$t->set($post);
					echo '<script> alert("Registrado com Sucesso!"); window.location.href = "'.BASE.'google?tracking=2"; </script>';
				}
			}

			$this->loadTemplate('tracking', $dados);
		} else {
			header('Location: '.BASE);
		}
	}
}