<?php
class Dashboard{
    public $dataInicio;
    public $dataFim;
    public $numeroVendas;
    public $totalVendas;

    public function __get($atributo){
        return $this->$atributo;
    }// get

    public function __set($atributo, $valor){
        $this->$atributo = $valor;

        return $this;
    } // set

}//dashboard

class Conexao{
    private $host = 'localhost';
    private $dbname = 'dashboard';
    private $user = 'safeno';
    private $senha = 'root';

    public function conectar(){
        try{
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->user", "$this->senha");


            $conexao->exec('set charset utf8');

            return $conexao;
        }catch(PDOException $e){
            echo "ERRO : ".$e->getMessage();
        }
    } // conectar
}// Conexao

class Bd{
    private $conexao;
    private $dashboard;

    public function __construct(Conexao $conexao, Dashboard $dashboard){
        $this->conexao = $conexao->conectar();
        $this->dashboard = $dashboard;
    } // construct

    public function getNumeroVendas(){
        $query = 'SELECT COUNT(*) as numero_vendas FROM tb_vendas WHERE data_venda BETWEEN :data_inicio and :data_fim ';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim',  $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
    } // getNumeroVendas


    public function getTotalVendas(){
        $query = 'SELECT SUN(total) as total_vendas FROM tb_vendas WHERE data_venda BETWEEN :data_inicio and :data_fim ';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim',  $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
    } // getNumeroVendas


}// bd

$dashboard = new Dashboard();
$conexao = new Conexao();

$dashboard->__set('data_inicio', '2018-08-01');
$dashboard->__set('data_fim', '2018-08-31');

$bd = new Bd($conexao, $dashboard);

$dashboard->__set('numeroVendas', $bd->getNumeroVendas());
print_r($dashboard);