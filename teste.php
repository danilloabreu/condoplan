<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path."/condoplan/model/php/Lote.php");
require_once($path."/condoplan/controller/php/conexao.php");
require_once($path."/condoplan/util/function.php");

//$usuario="Danilo";
//$senha="1234";
//var_dump($usuario);
//var_dump($resultado);
//var_dump($listaUsuario);
 /*
$resultado=Quadra::read($conexao);
$quadra = array();
foreach ($resultado as $value){
     array_push($quadra,$value->getQuadra());  
 }
$htmlSelectQuadra = htmlSelectArray($quadra,$classe);
 */

$quadra="A";

echo Lote::htmlSelectLote($conexao, "A");


