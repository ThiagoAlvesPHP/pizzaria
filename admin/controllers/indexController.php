<?php
class indexController extends controller {

	public function __construct(){
		if (empty($_SESSION['lg'])) {
			header('Location: '.BASE.'login');
		}
	}

	public function index() {
		$dados = array();
		$h = new Home();
		$i = new Image();

		$dados['home'] = $h->get();
		$caminho = 'assets/img/home/';

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		if (!empty($post)) {
			if (!empty($post['up'])) {
				$post['id'] = $dados['home']['id'];

				if ($_FILES['image1']['size'] > 0) {
					if ($_FILES['image1']['type'] == 'image/png') {
						if (file_exists($caminho.$dados['home']['image1'])) {
							unlink($caminho.$dados['home']['image1']);
						}
						$arquivo1 = md5($_FILES['image1']['tmp_name'].time().rand(0,999)).'.png';
						$post['image1'] = $arquivo1;
						$i->img1(600, 200, $caminho, $arquivo1);
					}
				}

				if ($_FILES['image2']['size'] > 0) {
					if ($_FILES['image2']['type'] == 'image/png') {
						if (file_exists($caminho.$dados['home']['image2'])) {
							unlink($caminho.$dados['home']['image2']);
						}
						$arquivo2 = md5($_FILES['image1']['tmp_name'].time().rand(0,999)).'.png';
						$post['image2'] = $arquivo2;
						$i->img2(1500, 800, $caminho, $arquivo2);
					}
				}

				$h->up($post);
				echo '<script> alert("Alteração realizada com sucesso!"); window.location.href = "'.BASE.'index/"; </script>';

			} else {
				if ($_FILES['image1']['type'] == 'image/png' AND $_FILES['image2']['type'] == 'image/png') {
					
					$arquivo1 = md5($_FILES['image1']['tmp_name'].time().rand(0,999)).'.png';
					$arquivo2 = md5($_FILES['image2']['tmp_name'].time().rand(0,999)).'.png';
					$post['image1'] = $arquivo1;
					$post['image2'] = $arquivo2;

					$i->img1(600, 200, $caminho, $arquivo1);
					$i->img2(1500, 800, $caminho, $arquivo2);

					$h->set($post);
					echo '<script> alert("Cadastro realizado com sucesso!"); window.location.href = "'.BASE.'index/"; </script>';
				}
			}
		}

		$this->loadTemplate('index', $dados);
	}
}