<?php
class Menu extends model{
	//registrar about
	public function set($post){

		$sql = $this->db->prepare('
			INSERT INTO menu
			SET 
			image = :image,
			title = :title,
			description = :description,
			id_user = :id_user
			');
		$sql->bindValue(':image', $post['image']);
		$sql->bindValue(':title', $post['title']);
		$sql->bindValue(':description', $post['description']);
		$sql->bindValue(':id_user', $_SESSION['lg']);
		$sql->execute();
	}

	//selecionar cliente por id
	public function get($id){
		$sql = $this->db->prepare("SELECT * FROM menu WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}

	//selecionar cliente por id
	public function getAll(){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM menu ORDER BY title");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
		}

		return $array;
	}

	//alterando dados
	public function up($post){
		if ($_FILES['image']['size'] > 0) {
			$sql = $this->db->prepare('
				UPDATE menu
				SET 
				image = :image,
				title = :title,
				description = :description
				WHERE id = :id
				');
			$sql->bindValue(':image', $post['image']);
			$sql->bindValue(':title', $post['title']);
			$sql->bindValue(':description', $post['description']);
			$sql->bindValue(':id', $post['id']);
			$sql->execute();
		} else {
			$sql = $this->db->prepare('
				UPDATE menu
				SET 
				title = :title,
				description = :description
				WHERE id = :id
				');
			$sql->bindValue(':title', $post['title']);
			$sql->bindValue(':description', $post['description']);
			$sql->bindValue(':id', $post['id']);
			$sql->execute();
		}
				
	}
	//selecionar cliente por id
	public function del($id){
		$sql = $this->db->prepare("DELETE FROM menu WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

	public function count(){
		$sql = $this->db->prepare("SELECT COUNT(*) as c FROM menu");
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
}