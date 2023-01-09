<?php

interface EquipamentoEletronicoInferface{
    public function ligar();
    public function desligar();
}
class Geladeira implements EquipamentoEletronicoInferface{

    public function ligar(){
        echo "Ligar";
    }

    public function desligar(){
        echo "Desligar";
    }
    public function abrirPorta(){
        echo "Abrir a porta";
    }
}// Geladeira

class TV{
    public function trocarCanal(){
        echo "Trocar Canal";
    }
}// TV

$x = new Geladeira();
$y = new TV();


?>