<?php
$conexao = mysqli_connect('mysql.condoplan.com.br','condoplan','do48soa5','condoplan');
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if(!$conexao) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");
//set correct charset
$conexao->set_charset("utf8");
//reporta todos os erros
//$driver = new mysqli_driver();
//$driver->report_mode = MYSQLI_REPORT_ERROR;
?>