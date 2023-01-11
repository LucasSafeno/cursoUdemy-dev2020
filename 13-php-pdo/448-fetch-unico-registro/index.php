<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'safeno';
$pass = 'root';


try{
    $conexao = new PDO($dsn, $user, $pass);

    $query = 'SELECT * FROM tb_usuarios WHERE id = 2';
    $stmt = $conexao->query($query);
    $usuario = $stmt->fetch(PDO::FETCH_OBJ);
    echo $usuario->nome;
    /*
    suario = $stmt->fetch();
    echo $usuario['nome'];
    */




}catch(PDOException $e){
    echo "Código : " . $e->getCode();
    echo "<br>";
    echo "Mensagem : " . $e->getMessage();
}

