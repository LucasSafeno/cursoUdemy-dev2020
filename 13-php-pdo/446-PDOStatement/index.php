<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'safeno';
$pass = 'root';


try{
    $conexao = new PDO($dsn, $user, $pass);

    $query = 'SELECT * FROM tb_usuarios';
    $stmt = $conexao->query($query);
    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($lista);
    echo '</pre>';

    echo $lista[0]['nome']. ' - '.$lista[0]['email'];




}catch(PDOException $e){
    echo "Código : " . $e->getCode();
    echo "<br>";
    echo "Mensagem : " . $e->getMessage();
}

