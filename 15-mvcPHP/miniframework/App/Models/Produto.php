<?php
namespace App\Models;

class Produto{
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    } // construct

    public function getProdutos(){
        $query = "SELECT id, descricao, preco FROM tb_produtos";
        return $this->db->query($query)->fetchAll();
    } // getProdutos


}// Produto

?>