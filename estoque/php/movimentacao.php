<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'estoquewps.mysql.dbaas.com.br');
        define('nombre_bd', 'estoquewps');
        define('usuario', 'estoquewps');
        define('password', 'Estoque123@');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("Erro de conexão: ". $e->getMessage());
        }
    }
}

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM movimentacao";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion=null


?>