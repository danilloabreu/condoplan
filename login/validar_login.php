<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require "$path/condoplan/util/conexao.php";
require "$path/condoplan/util/model/php/Usuario.php";
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

//recebimento do nome de usuario e senha 
if(isset($_POST['usuario'])&&(isset($_POST['senha']))){

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$resultado= Usuario::checarLogin($usuario, $senha, $conexao);
if($resultado){


$_SESSION['usuario']=$resultado;
$url="/condoplan/inicio";
header("Location: $url");
}else{
die("Não Localizado!");    
}

}else{
    die("Você deve fazer seu login");
}
?>