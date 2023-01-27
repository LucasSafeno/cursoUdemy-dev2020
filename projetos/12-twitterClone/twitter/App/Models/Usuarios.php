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
	}


}// Usuarios

 ?>
