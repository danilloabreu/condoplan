<?php
$path = $_SERVER['DOCUMENT_ROOT'];

require "$path/condoplan/controller/php/conexao.php";
require "$path/condoplan/model/php/Usuario.php";

//recebimento do nome de usuario e senha 
if(isset($_POST['usuario'])&&(isset($_POST['senha']))){

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$resultado= Usuario::checarLogin($usuario, $senha, $conexao);
if($resultado){

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

$_SESSION['usuario']=$resultado;
$url="/condoplan/pagina_inicial.php";
header( "Location: $url" );
}else{
die("Não Localizado!");    
}

}else{
    die("Você deve fazer seu login");
}








?>


