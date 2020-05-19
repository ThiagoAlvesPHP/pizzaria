<?php
class Home extends model{

	//registrar about
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
}