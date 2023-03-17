<?php
namespace A;
    class Cliente implements CadastroInferface{
    public $nome = 'Lucas';

    public function __get($attr){
        return $this->$attr;   
    }

    public function salvar(){
        echo "Slvar";
    }

    public function remover(){
        echo "remover";
    }
} // Cliente


interface CadastroInferface{
    public function salvar();
    public function remover();
}