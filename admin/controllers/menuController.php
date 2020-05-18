<?php
class menuController extends controller {

	public function __construct(){
		if (empty($_SESSION['lg'])) {
			header('Location: '.BASE.'login');
		}
	}

	public function index() {
		$dados = array();
		$m = new Menu();
		$i = new Image();

		$caminho = 'assets/img/menu/';
		$dados['menu'] = $m->getAll();
		$dados['url'] = $caminho;

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

		//deletando cardapio e sua imagem
		if (!empty($get['id'])) {
			$menu = $m->get($get['id']);
			if (file_exists($caminho.$menu['image'])) {
				unlink($caminho.$menu['image']);
			}
			$m->del($get['id']);
			echo '<script> alert("Deletado com sucesso!"); window.location.href = "'.BASE.'menu/"; </script>';
		}

		if (!empty($post)) {
			//verifica se o arquivo é jpeg
			if ($_FILES['image']['type'] == 'image/jpeg') {
				$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
				$post['image'] = $arquivo;
				$i->img(500, 400, $caminho, $arquivo);
				$m->set($post);
				echo '<script> alert("Cadastro realizado com sucesso!"); window.location.href = "'.BASE.'menu/"; </script>';
			} else {
				echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'menu/"; </script>';
			}
			
		}

		$this->loadTemplate('menu', $dados);
	}
	public function edit($id){
		if (!empty($id)) {
			$dados = array();
			$m = new Menu();
			$i = new Image();

			$caminho = 'assets/img/menu/';
			$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

			$dados['menu'] = $m->get($id);

			if (!empty($post)) {
				$post['id'] = $id;
				if ($_FILES['image']['size'] > 0) {
					//verifica se o arquivo é jpeg
					if ($_FILES['image']['type'] == 'image/jpeg') {
						if (file_exists($caminho.$dados['menu']['image'])) {
							unlink($caminho.$dados['menu']['image']);
						}
						$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
						$post['image'] = $arquivo;
						$i->img(500, 400, $caminho, $arquivo);
						$m->up($post);
						echo '<script> alert("Atualização realizada com sucesso!"); window.location.href = "'.BASE.'menu/edit/'.$id.'"; </script>';
					} else {
						echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'menu/edit/'.$id.'"; </script>';
					}
				} else {
					$m->up($post);
					echo '<script> alert("Atualização realizada com sucesso!"); window.location.href = "'.BASE.'menu/edit/'.$id.'"; </script>';
				}
			}

			$this->loadTemplate('menu_edit', $dados);
		} else {
			header('Location: '.BASE.'menu');
		}
	}
}