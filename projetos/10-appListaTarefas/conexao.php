<?php
class Conexao{
    private $host = 'localhost';
    private $dbname = 'php_pdo';
    private $user = 'safeno';
    private $pass = 'root';
    
    public function conectar(){
        try{
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass",
            );

            return $conexao;

        }catch(PDOException $e){
            echo "<strong>Código:</strong>" .$e->gerCode();
            echo '<br>';
            echo "<strong>Mensagem :</strong>" .$e->getMessage();
        }
    }// conectar 
}