<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'safeno';
$pass = 'root';


try{
    $conexao = new PDO($dsn, $user, $pass);

    /*
    $query = '
    create table  tb_usuarios(
        id int not null primary key auto_increment,
        nome varchar(50) not null,
        email varchar(100) not null,
        senha varchar(32) not null
    )';

    // exec -> possível excutar qualquer query
    $retorno = $conexao->exec($query); // retorno esperado 0
    echo $retorno; */

    /*
    $query = '
        INSERT INTO tb_usuarios (nome,email,senha) VALUES("Lucas", "contato@atualtech.online", "123456")
    '; */
    $query = 'DELETE FROM tb_usuarios';

    $retorno = $conexao->exec($query);

    echo $retorno;


}catch(PDOException $e){
    echo "Código : " . $e->getCode();
    echo "<br>";
    echo "Mensagem : " . $e->getMessage();
}

