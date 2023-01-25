<?php
namespace App\Controllers;
use MF\Controller\Action;
use stdClass;

class IndexController extends Action{
 
    public function index(){

        $this->view->dados = array('Sofá', 'Cadeira', 'Cama');

        $this->render('index');
    } // index

    public function sobreNos(){
        $this->view->dados = array('Notebook', 'Smartphone');
        $this->render('sobreNos');
    } // sobrenos



}// IndexController

?>