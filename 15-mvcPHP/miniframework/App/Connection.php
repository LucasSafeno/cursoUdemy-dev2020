<?php
namespace App;

use PDOException;

class Connection{

    public static function getDb(){
        try{
            $conn = new \PDO("mysql:host=localhost;dbname=mvc;charset=utf8","root", "root");
            return $conn;
        }catch(PDOException $e){
            echo "ERRO".$e->getMessage();
        }
    } // getDb

}// Connection
?>