<?php
namespace App;

use PDOException;

class Connection{

    public static function getDb(){
        try{
            $conn = new \PDO("mysql:host=localhost;dbname=twitter_clone;charset=utf8","safeno", "root");
            return $conn;
        }catch(PDOException $e){
            echo "ERRO".$e->getMessage();
        }
    } // getDb

}// Connection
?>