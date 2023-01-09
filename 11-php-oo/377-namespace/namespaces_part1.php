<?php

namespace A;
    class Cliente implements CadastroInferface{
    public $nome = 'Lucas';

    public function __get($attr){
        return $this->$attr;   
    }

    public function salvar(){
        echo "Salvando";
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
} // Cliente

interface CadastroInferface{
    public function salvar();
}


$c = new \A\Cliente();

print_r($c);
echo $c->__get('nome');

?>