<?php

//Bloco de código de conexão

class Conexao {
   
      public static $instance;
   
      private function __construct() {
          //
      }
   
      public static function getInstance() {
          if (!isset(self::$instance)) {
              self::$instance = new PDO('mysql:host=localhost;dbname=avaliacao', 'root', '1234', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
              self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
          }
   
          return self::$instance;
      }
   
  }
  
//Bloco de código de conexão
  
//Bloco de código de consulta
  
$nome = $_GET['tbl_nome'];
 
$idCliente = $pdo1->query("    
SELECT tbl_idCliente
FROM tbl_clientes
WHERE tbl_nome = '".$nome."'");

$codCategoria = $pdo2->query("
SELECT tbl_codCategoria
FROM tbl_clientes
WHERE tbl_idCliente = '".$idCliente."'");

$Categoria = $pdo3->query("
SELECT tbl_Categoria
FROM tbl_categorias
WHERE tbl_idCategoria = '".$codCategoria."'");
 
// primeira forma	
$result = $Categoria->fetch(PDO::FETCH_ASSOC);
echo '{ "Categoria": "'.$result['tbl_categoria'].' "} '.'<br />'; 
  
 //Bloco de código de consulta 
  
?>