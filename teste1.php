<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path."/condoplan/model/php/Usuario.php");
require_once($path."/condoplan/controller/php/conexao.php");



$usuario="Danilo";
$senha="1234";

//var_dump($usuario);
 $resultado=Usuario::read($conexao);
 //var_dump($resultado);
//var_dump($listaUsuario);



