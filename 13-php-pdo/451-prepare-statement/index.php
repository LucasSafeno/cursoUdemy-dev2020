<?php
if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
    $dsn    = 'mysql:host=localhost;dbname=php_pdo';
    $user   = 'root';
    $pass = 'root';

try{
    $conexao = new PDO($dsn, $user, $pass);
    
    // query

        $query = 'SELECT * FROM tb_usuarios WHERE ';
        $query .= " email = :usuario ";
        $query .= " AND  senha = :senha ";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->bindValue(':senha', $_POST['senha']);
        $stmt->execute();
        $usuario = $stmt->fetch();

        echo '<pre>';
        print_r($usuario);
        echo '</pre>';

}catch(PDOException $e){
    echo "Erro" . $e->getCode() . ' Mensagem ' . $e->getMessage();  
}
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prepare Statement</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" name="usuario" id="usuario" placeholder="usuario">
            <br>
            <input type="password" name="senha" id="senha" placeholder="senha">
            <br>
            <button type="submit">Entrar</button>
        </form>
        
    </body>
</html>