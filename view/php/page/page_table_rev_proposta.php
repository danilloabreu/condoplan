<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require "$path/condoplan/model/php/Proposta.php";
require "$path/condoplan/controller/php/conexao.php";
$id=1;
$listaProposta=Proposta::read($conexao,"id_mae=$id");
//var_dump($listaProposta);

$html="<table id='tabelaProposta' class='table table-hover' cellspacing='0' width='100%'>";
$html.='<thead>';
$html.='<tr>';
$html.="<th class='text-center'>Quadra</th>";
$html.="<th class='text-center'>Lote</th>";
$html.="<th class='text-center'>Corretor</th>";
$html.="<th class='text-center'>Comprador</th>";
$html.="<th class='text-center'>Renda Liq</th>";
$html.="<th class='text-center'>Ent</th>";
$html.="<th class='text-center'>Num Parc.</th>";
$html.="<th class='text-center'>Valor Parc.</th>";
$html.="<th class='text-center'>Valor Venda</th>";
$html.="<th class='text-center'>Status</th>";
$html.="<th class='text-center'>Revisao</th>";

$html.="</tr>";
$html.="</thead>";
$html.="<tbody>";
    for ($i = 0; $i < count ($listaProposta); $i++) {
    $html.="<tr idProposta=".$listaProposta[$i]->getId().">";
    $html.="<td class='text-center'>".$listaProposta[$i]->getQuadra()."</td>";
    $html.="<td class='text-center'>".$listaProposta[$i]->getLote()."</td>";
    $html.="<td class='text-center'>".$listaProposta[$i]->getCorretor()."</td>";
    $html.="<td class='text-center'>".$listaProposta[$i]->getComprador()."</td>";
    $html.="<td class='text-center'>".number_format($listaProposta[$i]->getRendaLiquida(), 2, ',', '.')."</td>";
    $html.="<td class='text-center'>".number_format($listaProposta[$i]->getEntradaLiquida(), 2, ',', '.')."</td>";
    $html.="<td class='text-center'>".$listaProposta[$i]->getNumParcela()."</td>";
    $html.="<td class='text-center'>".number_format($listaProposta[$i]->getValorParcela(), 2, ',', '.')."</td>";
    $html.="<td class='text-center'>".number_format($listaProposta[$i]->getValorVenda(), 2, ',', '.')."</td>";
    $html.="<td class='text-center'>".$listaProposta[$i]->getStatus()."</td>";
    $html.="<td class='text-center'><a href='/condoplan/view/php/page/page_table_rev_proposta.php'>".$listaProposta[$i]->getRevisao()."</a></td>";
    $html.="</tr>";
}
$html.="</tbody>";
$html.="</table>";

echo $html;


