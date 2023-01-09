<?php
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

?>