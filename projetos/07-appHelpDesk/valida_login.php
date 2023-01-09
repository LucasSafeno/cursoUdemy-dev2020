<?php
session_start();


	// Verifica se a autenticação foi realziada
	$usuario_autenticado = false;

	// usuarios app
	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => 'abcde')
	);

	foreach ($usuarios_app as $user) {

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
		}
	}

	if($usuario_autenticado){
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
	header("Location: home.php");
	}else{
		header("Location: index.php?login=erro");
		$_SESSION['autenticado'] = 'NAO';
	}

 ?>