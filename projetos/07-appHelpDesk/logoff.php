<?php
session_start();

session_destroy();

header("Location: index.php");
    // remover indices de sessão
    //unset($_SESSION['autenticado'])

    // remover a variavel sessão
    // session_destrou() // remove todos os indíces de session

?>