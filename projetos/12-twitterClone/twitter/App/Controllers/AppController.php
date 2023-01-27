<?php
namespace App\Controllers;
// Recursos
use MF\Controller\Action;
use MF\Model\Container;


class AppController extends Action{

	public function timeline(){
		session_start();

		if($_SESSION['id'] != '' && $_SESSION['nome'] != ''){
			$this->render('timeline', 'layout');
		}else{
			header("Location: /?login=erro");
		}

		
	}//timeline


} // AppController


?>