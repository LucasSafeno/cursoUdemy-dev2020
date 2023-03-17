<?php 
namespace App\Models;

use MF\Model\Model;

class Usuarios extends Model{

	private $id;
	private $nome;
	private $email;
	private $senha;

	public function __get($atributo){
		return $this->$atributo;
	}// __get

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	} // __set

	public function salvar(){
		$query = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome, :email, :senha)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":nome", $this->__get('nome'));
		$stmt->bindValue(":email", $this->__get('email'));
		$stmt->bindValue(":senha", $this->__get('senha')); // md5 -> hash 32 caracteres
		$stmt->execute();

		return $this;

	}// salvar
	
	public function validarCadastro(){
		$valido = true;

		if(strlen($this->__get('nome')) < 3){
			$valido = false;
		}
		if(strlen($this->__get('email')) < 3){
			$valido = false;
		}
		if(strlen($this->__get('senha')) < 3){
			$valido = false;
		}

		return $valido;

	} //validarCadastro


	public function getUsuarioPorEmail(){
		$query = "SELECT nome, email FROM usuarios WHERE email = :email";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":email", $this->__get('email'));
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	} // getUsuarioPorEmail

	public function autenticar(){
		$query = "SELECT id, nome, email FROM usuarios WHERE email = :email AND senha = :senha";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':email', $this->__get('email'));
		$stmt->bindValue(':senha',$this->__get('senha'));

		$stmt->execute();

		$usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

		if($usuario['id'] != '' && $usuario != ''){
			$this->__set('id',$usuario['id']);
			$this->__set('nome',$usuario['nome']);

		}

		return $this;
	}// autenticar

	public function getAll(){
		$query = "SELECT
					u.id,u.nome,u.email,
					(
						SELECT 
							COUNT(*)
						FROM
							usuarios_seguidores as us
						WHERE 
							us.id_usuario = :id_usuario AND us.id_usuario_seguindo = u.id
					) as seguindo_sn
				FROM
					usuarios as u
				WHERE
					u.nome like :nome AND u.id != :id_usuario";

		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome', '%'.$this->__get('nome').'%');
		$stmt->bindValue(':id_usuario', $this->__get('id'));
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}//getAll

	public function seguirUsuario($id_usuario_seguindo){
		$query = "INSERT INTO usuarios_seguidores(id_usuario,id_usuario_seguindo) VALUES(:id_usuario,:id_usuario_seguindo)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id_usuario', $this->__get('id'));
		$stmt->bindValue(':id_usuario_seguindo', $id_usuario_seguindo);
		$stmt->execute();

		return true;

	}// seguirUsuario

	public function deixarSeguirUsuario($id_usuario_seguindo){
		$query = "DELETE FROM usuarios_seguidores WHERE id_usuario = :id_usuario AND  id_usuario_seguindo = :id_usuario_seguindo";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id_usuario', $this->__get('id'));
		$stmt->bindValue(':id_usuario_seguindo', $id_usuario_seguindo);
		$stmt->execute();

		return true;
	} // deixarSeguirUsuario

	public function getInfoUsuario(){
		$query = "SELECT nome FROM usuarios WHERE id = :id_usuario";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id_usuario', $this->__get('id'));
		$stmt->execute();

		return $stmt->fetch(\PDO::FETCH_ASSOC);
	} // getInfoUsuario

	public function getTotalTweets(){
		$query = "SELECT COUNT(*) as total_tweets FROM tweets WHERE id_usuario = :id_usuario";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id_usuario', $this->__get('id'));
		$stmt->execute();

		return $stmt->fetch(\PDO::FETCH_ASSOC);
	} // getTotalTweets


	public function getTotalSeguindo(){
		$query = "SELECT COUNT(*) as total_seguindo FROM usuarios_seguidores WHERE id_usuario = :id_usuario";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id_usuario', $this->__get('id'));
		$stmt->execute();

		return $stmt->fetch(\PDO::FETCH_ASSOC);
	} // getTotalSeguindo

	public function getTotalSeguidores(){
		$query = "SELECT COUNT(*) as total_seguidores FROM usuarios_seguidores WHERE id_usuario_seguindo = :id_usuario";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id_usuario', $this->__get('id'));
		$stmt->execute();

		return $stmt->fetch(\PDO::FETCH_ASSOC);
	} // getTotalSeguidores

}// Usuarios

 ?>
