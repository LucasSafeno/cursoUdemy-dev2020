<?php
class Funcionario{
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    // getters e setters
    public function setNome($nome){
        $this->nome = $nome;
    }// setNome

     public function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }// setNumFilhos


    //getters
    public function getNome(){
        return $this->nome;
    } // getNome

    public function getNumFilhos(){
        return $this->numFilhos;
    } // getNome


}// funcionarios
$y = new Funcionario();
$y->setNome('Lucas');
$y->setNumFilhos(3);
echo $y->getNome().'<br>'.$y->getNumFilhos();

?>