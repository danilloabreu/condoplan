<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path."/condoplan/model/php/Quadra.php");
require_once($path."/condoplan/controller/php/conexao.php");
require_once($path."/condoplan/util/function.php");

$resultado=Quadra::read($conexao);
$quadra = array();
foreach ($resultado as $value){
     array_push($quadra,$value->getQuadra());  
 }
$htmlSelectQuadra = htmlSelectArray($quadra,"quadra","quadra","required","form-control col-md-7 col-xs-12");

