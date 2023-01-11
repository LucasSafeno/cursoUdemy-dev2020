<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'safeno';
$pass = 'root';


try{
    $conexao = new PDO($dsn, $user, $pass);

    $query = 'SELECT * FROM tb_usuarios';
    //$stmt = $conexao->query($query);

    foreach($conexao->query($query) as $chave => $valor){
        print_r($valor);
        echo '<hr>';
    }

    //$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
   /* foreach($lista as $key => $value){
            echo($value['nome']);
            echo '<hr>';
    }
    */


}catch(PDOException $e){
    echo "Código : " . $e->getCode();
    echo "<br>";
    echo "Mensagem : " . $e->getMessage();
}

