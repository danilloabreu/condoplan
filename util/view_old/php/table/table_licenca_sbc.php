<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require "$path/condoplan/model/php/Licenca.php";
require "$path/condoplan/controller/php/DateHelper.php";
require "$path/condoplan/controller/php/conexao.php";

$listaLicenca= Licenca::read($conexao,"base='SBC' AND is_valid='1'");
//var_dump($listaMestraDocumento);

$html="<table id='tabelaLicenca' class='table table-hover' cellspacing='0' width='100%'>";
$html.='<thead>';
$html.='<tr>';
$html.="<th class='text-center'>Orgão</th>";
$html.="<th class='text-center'>Descrição</th>";
$html.="<th class='text-center'>Emissão</th>";
$html.="<th class='text-center'>Validade</th>";


$html.="</tr>";
$html.="</thead>";
$html.="<tbody>";
    for ($i = 0; $i < count ($listaLicenca); $i++) {
    $html.="<tr data-idLicenca=".$listaLicenca[$i]->getId().">";
    $html.="<td class='text-center'>".$listaLicenca[$i]->getOrgao()."</td>";
    $html.="<td class='text-center'><a target='_blank' href='/condoplan/file/ambiental/".$listaLicenca[$i]->getFile()."'>".$listaLicenca[$i]->getDescricao()."</a></td>";
    $html.="<td class='text-center'>".DateHelper::formatar($listaLicenca[$i]->getEmissao())."</td>";
    $html.="<td class='text-center'>".DateHelper::formatar($listaLicenca[$i]->getValidade())."</td>";
    $html.="</tr>";
}
$html.="</tbody>";
$html.="</table>";

echo $html;