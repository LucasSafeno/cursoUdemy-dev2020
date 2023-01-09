<?php
    Class Exemplo{
    public static $atributo1 = 'Atributos estatico';
    public $atributo2 = 'atributo normal';

     public static function metodo1(){
        echo 'Metodo estatico';
     }

     public function metodo2(){
        echo 'Metodo Normal';
     }

    }// Exemplo


//$x = new Exemplo();
echo Exemplo::$atributo1;
echo "<br>";
Exemplo::metodo1();

?>