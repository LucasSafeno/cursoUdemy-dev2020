<?php
$dsn    = 'mysql:host=localhost;dbname=php_pdo';
$user   = 'root';
$pass = 'roots';

try{
    $conexao = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
    echo "Erro" . $e->getCode() . ' Mensagem ' . $e->getMessage();

    //registrar erro
    
}

