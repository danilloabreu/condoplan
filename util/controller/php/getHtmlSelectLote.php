<?php $path = $_SERVER['DOCUMENT_ROOT'];
 require_once ($path.'/condoplan/controller/php/htmlSelectQuadra.php');
 require_once ($path.'/condoplan/Model/php/Lote.php');

$quadra=$_POST['quadra'];
echo Lote::htmlSelectLote($conexao, $quadra);


