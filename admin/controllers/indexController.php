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

	public function promotions(){
		$dados = array();
		$i = new Image();
		$h = new Home();
		$caminho = 'assets/img/home/promocoes/';
		$dados['url'] = $caminho;

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

		//deletando cardapio e sua imagem
		if (!empty($get['id'])) {
			$promotions = $h->getPromotion($get['id']);
			if (file_exists($caminho.$promotions['image'])) {
				unlink($caminho.$promotions['image']);
			}
			$h->delPromotion($get['id']);
			echo '<script> alert("Deletado com sucesso!"); window.location.href = "'.BASE.'index/promotions"; </script>';
		}

		//registrar
		if (!empty($post['title'])) {
			//verifica se o arquivo é jpeg
			if ($_FILES['image']['type'] == 'image/jpeg') {
				$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
				$post['image'] = $arquivo;
				$i->img(500, 400, $caminho, $arquivo);
				$h->setPromotions($post);
				echo '<script> alert("Cadastro realizado com sucesso!"); window.location.href = "'.BASE.'index/promotions"; </script>';
			} else {
				echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'index/promotions"; </script>';
			}
		}

		//atualizar
		if (!empty($post['titleUp'])) {

			if ($_FILES['imageUp']['size'] > 0) {
				//verifica se o arquivo é jpeg
				if ($_FILES['imageUp']['type'] == 'image/jpeg') {
					if (file_exists($caminho.$post['imageOut'])) {
						unlink($caminho.$post['imageOut']);
					}
					$_FILES['image'] = $_FILES['imageUp'];
					$arquivo = md5($_FILES['imageUp']['tmp_name'].time().rand(0,999)).'.jpeg';
					$post['imageUp'] = $arquivo;
					$i->img(500, 400, $caminho, $arquivo);
				} else {
					echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'index/promotions"; </script>';
				}
			}
			
			$h->upPromotion($post);
			echo '<script> alert("Atualizado com sucesso!"); window.location.href = "'.BASE.'index/promotions"; </script>';
		}

		$dados['list'] = $h->getAllPromotions();
		$this->loadTemplate('promotions', $dados);
	}

	public function carousel(){
		$dados = array();
		$h = new Home();

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

		if (!empty($post['text1'])) {
			$h->setCarousel($post);
			echo '<script> alert("Cadastro realizado com sucesso!"); window.location.href = "'.BASE.'index/carousel"; </script>';
		}

		if (!empty($post['text1Up'])) {
			$h->upCarousel($post);
			echo '<script> alert("Atualizado com sucesso!"); window.location.href = "'.BASE.'index/carousel"; </script>';
		}

		if (!empty($get['id'])) {
			$h->delCarousel($get['id']);
			echo '<script> alert("Deletado com sucesso!"); window.location.href = "'.BASE.'index/carousel"; </script>';
		}

		$dados['list'] = $h->getAllCarousel();
		$this->loadTemplate('carousel', $dados);
	}

	public function description(){
		$dados = array();
		$h = new Home();
		$i = new Image();

		$caminho = 'assets/img/home/descricoes/';
		$dados['get'] = $h->getDescription();

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);

		if (!empty($post)) {
			if (!empty($post['up'])) {
				$post['id'] = $post['up'];

				if ($_FILES['image']['size'] > 0) {
					if ($_FILES['image']['type'] == 'image/jpeg') {
						if (file_exists($caminho.$dados['get']['image'])) {
							unlink($caminho.$dados['get']['image']);
						}
						$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
						$post['image'] = $arquivo;
						$i->img(1000, 1000, $caminho, $arquivo);
					}  else {
						echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'index/description"; </script>';
					}
				}
				$h->upDescription($post);
				echo '<script> alert("Alteração realizada com sucesso!"); window.location.href = "'.BASE.'index/description"; </script>';
			} else {
				//verifica se o arquivo é jpeg
				if ($_FILES['image']['type'] == 'image/jpeg') {
					$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
					$post['image'] = $arquivo;
					$i->img(500, 400, $caminho, $arquivo);
					$h->setDescription($post);
					echo '<script> alert("Cadastro realizado com sucesso!"); window.location.href = "'.BASE.'index/description"; </script>';
				} else {
					echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'index/description"; </script>';
				}
			}


		}

		$this->loadTemplate('description', $dados);
	}

	public function banner(){
		$dados = array();
		$h = new Home();
		$i = new Image();

		$caminho = 'assets/img/home/banner/';
		$dados['url'] = $caminho;
		$dados['get'] = $h->getBanner();

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		if (!empty($post)) {
			if (!empty($post['up'])) {
				$post['id'] = $post['up'];

				if ($_FILES['image']['size'] > 0) {
					if ($_FILES['image']['type'] == 'image/jpeg') {
						if (file_exists($caminho.$dados['get']['image'])) {
							unlink($caminho.$dados['get']['image']);
						}
						$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
						$post['image'] = $arquivo;
						$i->img(1500, 800, $caminho, $arquivo);
					}  else {
						echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'index/banner"; </script>';
					}
				}
				$h->upBanner($post);
				echo '<script> alert("Alteração realizada com sucesso!"); window.location.href = "'.BASE.'index/banner"; </script>';
			} else {
				//verifica se o arquivo é jpeg
				if ($_FILES['image']['type'] == 'image/jpeg') {
					$arquivo = md5($_FILES['image']['tmp_name'].time().rand(0,999)).'.jpeg';
					$post['image'] = $arquivo;
					$i->img(1500, 1500, $caminho, $arquivo);
					$h->setBanner($post);
					echo '<script> alert("Cadastro realizado com sucesso!"); window.location.href = "'.BASE.'index/banner"; </script>';
				} else {
					echo '<script> alert("Formato de arquivo não permitido!"); window.location.href = "'.BASE.'index/banner"; </script>';
				}
			}


		}

		$this->loadTemplate('banner', $dados);
	}
}