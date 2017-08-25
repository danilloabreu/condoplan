<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require "$path/condoplan/model/php/ListaMestraDocumento.php";
require "$path/condoplan/controller/php/conexao.php";

$listaMestraDocumento= ListaMestraDocumento::read($conexao);
//var_dump($listaMestraDocumento);

$html="<table id='tabelaListaMestraDocumento' class='table table-hover' cellspacing='0' width='100%'>";
$html.='<thead>';
$html.='<tr>';
$html.="<th class='text-center'>Seção da Norma</th>";
$html.="<th class='text-center'>Nº do Documento</th>";
$html.="<th class='text-center'>Descrição</th>";
$html.="<th class='text-center'>Data de Emissão</th>";
$html.="<th class='text-center'>Revisão</th>";
$html.="<th class='text-center'>Vendas</th>";
$html.="<th class='text-center'>Compras</th>";
$html.="<th class='text-center'>Op. Americana</th>";
$html.="<th class='text-center'>Op. SBC</th>";
$html.="<th class='text-center'>Direção</th>";
$html.="<th class='text-center'>Qualidade</th>";
$html.="<th class='text-center'>Recursos Humanos</th>";

$html.="</tr>";
$html.="</thead>";
$html.="<tbody>";
    for ($i = 0; $i < count ($listaMestraDocumento); $i++) {
    $html.="<tr idProposta=".$listaMestraDocumento[$i]->getId().">";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getSecaoNorma()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getNumDocumento()."</td>";
    $html.="<td class='text-center'><a target='_blank' href='/condoplan/file/qualidade/".$listaMestraDocumento[$i]->getPath()."'>".$listaMestraDocumento[$i]->getDescricao()."</a></td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getDataEmissao()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getRevisao()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getDistVendas()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getDistCompras()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getDistOperacionalAm()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getDistOperacionalSbc()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getDistDirecao()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getDistQualidade()."</td>";
    $html.="<td class='text-center'>".$listaMestraDocumento[$i]->getDistRh()."</td>";
    
    $html.="</tr>";
}
$html.="</tbody>";
$html.="</table>";

echo $html;