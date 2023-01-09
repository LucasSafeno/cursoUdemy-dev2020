<?php
class Funcionario{
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getter e setters overloading / sobrecarga
    
    #Set
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    #Get
    function __get($atributo){
        return $this->$atributo;
    }


}// funcionario

$y = new Funcionario();
$y->__set('nome', 'Lucas');
$y->__set('numFilhos', 3);

echo $y->__get('nome') . '<br>' . $y->__get('numFilhos');
?>