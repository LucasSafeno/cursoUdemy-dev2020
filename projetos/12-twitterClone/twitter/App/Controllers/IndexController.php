<?php
namespace App\Controllers;
// Recursos
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action{
 
    public function index(){

        $this->render('index','layout');
    } // index


    public function inscreverse(){
        $this->render('inscreverse','layout');
    }




}// IndexController

?>