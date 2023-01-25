<?php
namespace App\Controllers;
// Recursos
use MF\Controller\Action;
use MF\Model\Container;
//Models
use App\Models\Info;
use App\Models\Produto;


class IndexController extends Action{
 
    public function index(){

        //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

        $produto = Container::getModel('Produto');
        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    } // index

    public function sobreNos(){
        //$this->view->dados = array('Notebook', 'Smartphone');

        $info = Container::getModel('Info');
        $informacoes = $info->getInfo();


        $this->view->dados = $informacoes;

        $this->render('sobreNos','layout1');
    } // sobrenos



}// IndexController

?>