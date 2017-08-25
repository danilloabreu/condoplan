<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require "$path/condoplan/model/php/Proposta.php";
require "$path/condoplan/controller/php/conexao.php";
require "$path/condoplan/controller/php/DateHelper.php";


//recebimento de proposta para salvar no banco
if(isset($_POST['propostaJson'])){

$propostaJson=$_POST['propostaJson'];
$propostaJson= json_decode($propostaJson);
//echo "dandan";
print_r($propostaJson);

if($propostaJson->tipo=="alterar"){
    
}

if ($propostaJson->tipo=="inserir"){
$proposta = new Proposta(0,0, $propostaJson->quadra, $propostaJson->lote, $propostaJson->corretor, $propostaJson->comprador, $propostaJson->rendaLiquida, $propostaJson->entradaLiquida, $propostaJson->numParcela, $propostaJson->valorParcela, $propostaJson->valor, $propostaJson->isContratoAssinado, $propostaJson->isContratoEmitido, DateHelper::dataAtual(), $dataUpdate=0, $status=0,0,0, $isFinished=0,0);
$proposta->create($conexao);
$conexao->close();
//print_r($proposta);
}
}

//recebimento da proposta para atualização no banco



//recebimento de solicitação para recuperar proposta
if(isset($_POST['idProposta'])){
   $proposta=Proposta::read($conexao, "id=$_POST[idProposta]");
   $proposta=json_encode($proposta[0],JSON_PRETTY_PRINT);
   echo $proposta;
}



?>

