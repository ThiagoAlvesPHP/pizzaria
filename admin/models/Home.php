<?php
class Home extends model{

	//registrar home
	public function set($post){

		$sql = $this->db->prepare('
			INSERT INTO home
			SET 
			image1 = :image1,
			image2 = :image2,
			title1 = :title1,
			title2 = :title2,
			button = :button,
			color_button = :color_button,
			detalhes_contato = :detalhes_contato,
			google_map = :google_map,
			link_face = :link_face,
			link_instagram = :link_instagram,
			id_user = :id_user
			');
		$sql->bindValue(':image1', $post['image1']);
		$sql->bindValue(':image2', $post['image2']);
		$sql->bindValue(':title1', $post['title1']);
		$sql->bindValue(':title2', $post['title2']);
		$sql->bindValue(':button', $post['button']);
		$sql->bindValue(':color_button', $post['color_button']);
		$sql->bindValue(':detalhes_contato', $post['detalhes_contato']);
		$sql->bindValue(':google_map', $post['google_map']);
		$sql->bindValue(':link_face', $post['link_face']);
		$sql->bindValue(':link_instagram', $post['link_instagram']);
		$sql->bindValue(':id_user', $_SESSION['lg']);
		$sql->execute();
	}

	//selecionar cliente por id
	public function get(){
		$sql = $this->db->prepare("SELECT * FROM home");
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}

	//alterando meus dados
	public function up($post){

		$sql = 'UPDATE home SET ';

		if ($_FILES['image1']['size'] > 0) {
			$sql .= 'image1 = :image1, ';
		} 
		if ($_FILES['image2']['size'] > 0) {
			$sql .= 'image2 = :image2, ';
		} 

		$sql .= '
				title1 = :title1, 
				title2 = :title2, 
				button = :button, 
				color_button = :color_button,
				detalhes_contato = :detalhes_contato,
				google_map = :google_map,
				link_face = :link_face,
				link_instagram = :link_instagram
				WHERE id = :id';
		$sql = $this->db->prepare($sql);
		if ($_FILES['image1']['size'] > 0) {
			$sql->bindValue(':image1', $post['image1']);
		} 
		if ($_FILES['image2']['size'] > 0) {
			$sql->bindValue(':image2', $post['image2']);
		} 
		$sql->bindValue(':title1', $post['title1']);
		$sql->bindValue(':title2', $post['title2']);
		$sql->bindValue(':button', $post['button']);
		$sql->bindValue(':color_button', $post['color_button']);
		$sql->bindValue(':detalhes_contato', $post['detalhes_contato']);
		$sql->bindValue(':google_map', $post['google_map']);
		$sql->bindValue(':link_face', $post['link_face']);
		$sql->bindValue(':link_instagram', $post['link_instagram']);
		$sql->bindValue(':id', $post['id']);

		$sql->execute();	
	}

	//promoções
	public function setPromotions($post){

		$sql = $this->db->prepare('
			INSERT INTO promotions
			SET 
			image = :image,
			title = :title
			');
		$sql->bindValue(':image', $post['image']);
		$sql->bindValue(':title', $post['title']);
		$sql->execute();
	}
	public function getAllPromotions(){
		$sql = $this->db->prepare("SELECT * FROM promotions");
		$sql->execute();

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	public function getPromotion($id){
		$sql = $this->db->prepare("SELECT * FROM promotions WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function upPromotion($post){

		$sql = 'UPDATE promotions SET ';

		if ($_FILES['imageUp']['size'] > 0) {
			$sql .= 'image = :image, ';
		}

		$sql .= '
				title = :title
				WHERE id = :id';
		$sql = $this->db->prepare($sql);
		if ($_FILES['imageUp']['size'] > 0) {
			$sql->bindValue(':image', $post['imageUp']);
		} 

		$sql->bindValue(':title', $post['titleUp']);
		$sql->bindValue(':id', $post['idUp']);

		$sql->execute();

	}
	public function delPromotion($id){
		$sql = $this->db->prepare("DELETE FROM promotions WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	//caroousel
	public function getAllCarousel(){
		$sql = $this->db->prepare("SELECT * FROM carousel");
		$sql->execute();

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	public function setCarousel($post){

		$sql = $this->db->prepare('
			INSERT INTO carousel
			SET 
			text1 = :text1,
			text2 = :text2
			');
		$sql->bindValue(':text1', $post['text1']);
		$sql->bindValue(':text2', $post['text2']);
		$sql->execute();
	}
	public function upCarousel($post){

		$sql = $this->db->prepare('
			UPDATE carousel
			SET 
			text1 = :text1,
			text2 = :text2
			WHERE id = :id
			');
		$sql->bindValue(':text1', $post['text1Up']);
		$sql->bindValue(':text2', $post['text2Up']);
		$sql->bindValue(':id', $post['idUp']);
		$sql->execute();
	}
	public function delCarousel($id){
		$sql = $this->db->prepare("DELETE FROM carousel WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	//descrição
	public function getDescription(){
		$sql = $this->db->prepare("SELECT * FROM description");
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function setDescription($post){

		$sql = $this->db->prepare('
			INSERT INTO description
			SET 
			image = :image,
			texto = :texto
			');
		$sql->bindValue(':image', $post['image']);
		$sql->bindValue(':texto', $post['texto']);
		$sql->execute();
	}
	public function upDescription($post){

		$sql = 'UPDATE description SET ';

		if ($_FILES['image']['size'] > 0) {
			$sql .= 'image = :image, ';
		}

		$sql .= '
				texto = :texto
				WHERE id = :id';
		$sql = $this->db->prepare($sql);
		if ($_FILES['image']['size'] > 0) {
			$sql->bindValue(':image', $post['image']);
		} 

		$sql->bindValue(':texto', $post['texto']);
		$sql->bindValue(':id', $post['id']);

		$sql->execute();

	}

	//descrição
	public function getBanner(){
		$sql = $this->db->prepare("SELECT * FROM banner");
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function upBanner($post){

		$sql = 'UPDATE banner SET image = :image WHERE id = :id';
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':image', $post['image']);
		$sql->bindValue(':id', $post['id']);

		$sql->execute();
	}

	public function setBanner($post){

		$sql = 'INSERT INTO banner SET image = :image';
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':image', $post['image']);

		$sql->execute();
	}
}