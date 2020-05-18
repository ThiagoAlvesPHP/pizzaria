<?php
class User extends model{

	//logar ou registrar usuario
	public function login($post){

		$sql = $this->db->prepare('
			SELECT id FROM users 
			WHERE email = :email
			AND pass = :pass');
		$sql->bindValue(':email', $post['email']);
		$sql->bindValue(':pass', md5($post['pass']));
		$sql->execute();
		
		if ($sql->rowCount() > 0) {
			$dados = $sql->fetch(PDO::FETCH_ASSOC);

			$_SESSION['lg'] = $dados['id'];
			return true;
		} else {
			return false;
		}
	}

	//selecionar cliente por id
	public function get($id){
		$sql = $this->db->prepare("
			SELECT * FROM users 
			WHERE id = :id
			");
		$sql->bindValue(':id', $id);
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	//selecionar todos os clientes
	public function getAll(){
		$sql = $this->db->prepare("
			SELECT * FROM users
			");
		$sql->execute();

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

	//alterando meus dados
	public function up($post){
		if (!empty($post['pass'])) {
			$sql = $this->db->prepare('
				UPDATE users
				SET 
				name = :name,
				email = :email,
				pass = :pass
				WHERE id = :id
				');
			$sql->bindValue(':name', $post['name']);
			$sql->bindValue(':email', $post['email']);
			$sql->bindValue(':pass', md5($post['pass']));
			$sql->bindValue(':id', $post['id']);
			$sql->execute();
		} else {
			$sql = $this->db->prepare('
				UPDATE users
				SET 
				name = :name,
				email = :email
				WHERE id = :id
				');
			$sql->bindValue(':name', $post['name']);
			$sql->bindValue(':email', $post['email']);
			$sql->bindValue(':id', $post['id']);
			$sql->execute();
		}
				
	}
}