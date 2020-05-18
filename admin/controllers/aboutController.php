<?php
class aboutController extends controller {

	public function __construct(){
		if (empty($_SESSION['lg'])) {
			header('Location: '.BASE.'login');
		}
	}

	public function index() {
		$dados = array();
		$a = new About();
		$i = new Image();

		$caminho = 'assets/img/about/';
		$dados['about'] = $a->get();

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		if (!empty($post)) {
			if (!empty($post['up'])) {
				$post['id'] = $dados['about']['id'];
				//verifica se uma imagem foi enviada
				if ($_FILES['image']['size'] > 0) {
					//verifica se o arquivo é jpeg
					if ($_FILES['image']['type'] == 'image/jpeg') {
						if (file_exists($caminho.$dados['about']['image'])) {
							unlink($caminho.$dados['about']['image']);
						}
						$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
						$post['image'] = $arquivo;
						$i->img(600, 500, $caminho, $arquivo);
						$a->up($post);
						echo '<script> alert("Atualização realizada com sucesso!"); window.location.href = "'.BASE.'about/"; </script>';
					} else {
						echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'about/"; </script>';
					}
				} else {
					$a->up($post);
					echo '<script> alert("Atualização realizada com sucesso!"); window.location.href = "'.BASE.'about/"; </script>';
				}
			} else {
				//verifica se o arquivo é jpeg
				if ($_FILES['image']['type'] == 'image/jpeg') {
					$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
					$post['image'] = $arquivo;
					$i->img(600, 500, $caminho, $arquivo);
					$a->set($post);
					echo '<script> alert("Cadastro realizado com sucesso!"); window.location.href = "'.BASE.'about/"; </script>';
				} else {
					echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'about/"; </script>';
				}
			}
			
		}

		$this->loadTemplate('about', $dados);
	}
}