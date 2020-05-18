<?php
class About extends model{

	//registrar about
	public function set($post){

		$sql = $this->db->prepare('
			INSERT INTO about
			SET 
			image = :image,
			description = :description,
			id_user = :id_user
			');
		$sql->bindValue(':image', $post['image']);
		$sql->bindValue(':description', $post['description']);
		$sql->bindValue(':id_user', $_SESSION['lg']);
		$sql->execute();
	}

	//selecionar cliente por id
	public function get(){
		$sql = $this->db->prepare("SELECT * FROM about");
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}

	//alterando meus dados
	public function up($post){
		if ($_FILES['image']['size'] > 0) {
			$sql = $this->db->prepare('
				UPDATE about
				SET 
				image = :image,
				description = :description
				WHERE id = :id
				');
			$sql->bindValue(':image', $post['image']);
			$sql->bindValue(':description', $post['description']);
			$sql->bindValue(':id', $post['id']);
			$sql->execute();
		} else {
			$sql = $this->db->prepare('
				UPDATE about
				SET 
				description = :description
				WHERE id = :id
				');
			$sql->bindValue(':description', $post['description']);
			$sql->bindValue(':id', $post['id']);
			$sql->execute();
		}
				
	}
}