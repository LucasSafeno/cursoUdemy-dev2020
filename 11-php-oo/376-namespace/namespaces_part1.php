<?php

namespace A;
    class Cliente implements \B\CadastroInferface{
    public $nome = 'Lucas';

    public function __construct(){
        echo "<pre>";
        print_r(get_class_method(this));
        echo "</pre>";
    }

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
}


namespace B;
    class Cliente implements CadastroInferface{
        public $nome = 'Daniel';
    
        public function __get($attr){
            return $this->$attr;
        }

        public function salvar(){
        echo "Salvando";
        }
        public function remover(){
            echo "remover";
        }
} // Cliente

interface CadastroInferface{
    public function salvar();
    public function remover();
}


$c = new \A\Cliente();

print_r($c);
echo $c->__get('nome');

?>