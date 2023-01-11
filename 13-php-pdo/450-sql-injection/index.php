<?php
if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
    $dsn    = 'mysql:host=localhost;dbname=php_pdo';
    $user   = 'root';
    $pass = 'root';

try{
    $conexao = new PDO($dsn, $user, $pass);
    
    // query

        $query = 'SELECT * FROM tb_usuarios WHERE ';
        $query .= " email = '{$_POST['usuario']}' ";
        $query .= " AND  senha = '{$_POST['senha']}' ";

        // echo $query;

        $stmt = $conexao->query($query);
        $usuario = $stmt->fetch();

        
        echo '<pre>';
        //print_r($usuario);
        echo '</pre>';

}catch(PDOException $e){
    echo "Erro" . $e->getCode() . ' Mensagem ' . $e->getMessage();  
}
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SQL Injection</title>
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