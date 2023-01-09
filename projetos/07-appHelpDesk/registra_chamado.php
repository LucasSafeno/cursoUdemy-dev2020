<?php

// Montando texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $titulo. '#' .$categoria. '#' . $descricao . PHP_EOL;

// Abrindo arquivo
$arquivo = fopen('arquivo.hd', 'a');
// Escrevendo texto
fwrite($arquivo, $texto);
// Fechadno arquivo
fclose($arquivo);

header("Location: abrir_chamado.php");
?>