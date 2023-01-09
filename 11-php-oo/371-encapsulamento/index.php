<?php
class Pai{
    private $nome; // está disponivel apenas para o proprio objeto
    protected $sobrenome = 'Tenório'; 
    public $humor = 'Feliz'; // acessado disponivel tanto para aplicação quanto para outros obejtos


    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        if(strlen($nome) >= 3){
            $this->nome = $nome;
        }
        
    }

}// Pai

$pai = new Pai();
$pai->setNome('Lucas');
echo $pai->getNome();

?>