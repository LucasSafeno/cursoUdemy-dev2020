<?php
namespace App\Controllers;
use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action{
 
    public function index(){

        //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

        // Instancia da conexão
        $conn = Connection::getDb();
        //Instancia Modelo
        $produto = new Produto($conn);
        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    } // index

    public function sobreNos(){
        //$this->view->dados = array('Notebook', 'Smartphone');
        $this->render('sobreNos','layout2');
    } // sobrenos



}// IndexController

?>