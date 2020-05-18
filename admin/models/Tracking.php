<?php
class Tracking extends model{

	//registrar about
	public function set($post){

		$sql = $this->db->prepare('
			INSERT INTO tracking
			SET 
			script = :script,
			verify = :verify
			');
		$sql->bindValue(':script', $post['script']);
		$sql->bindValue(':verify', $post['verify']);
		$sql->execute();
	}

	//selecionar cliente por id
	public function get($id){
		$sql = $this->db->prepare("SELECT * FROM tracking WHERE id = :id");
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function getVerify($verify){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM tracking WHERE verify = :verify");
		$sql->bindValue(':verify', $verify);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch(PDO::FETCH_ASSOC);
		}

		return $array;
	}

	//alterando meus dados
	public function up($post){
		$sql = $this->db->prepare('
			UPDATE tracking
			SET 
			script = :script
			WHERE id = :id
			');
		$sql->bindValue(':script', $post['script']);
		$sql->bindValue(':id', $post['id']);
		$sql->execute();				
	}
}