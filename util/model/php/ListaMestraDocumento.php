<?php

class ListaMestraDocumento{
    
   public $id;
   public $secaoNorma;
   public $numDocumento;
   public $descricao;
   public $dataEmissao;
   public $revisao;
   public $distVendas;
   public $distCompras;
   public $distOperacionalAm;
   public $distOperacionalSbc;
   public $distDirecao;
   public $distQualidade;
   public $distRh;
   public $path;        

   function __construct($id, $secaoNorma, $numDocumento, $descricao, $dataEmissao, $revisao, $distVendas, $distCompras, $distOperacionalAm, $distOperacionalSbc, $distDirecao, $distQualidade, $distRh, $path) {
       $this->id = $id;
       $this->secaoNorma = $secaoNorma;
       $this->numDocumento = $numDocumento;
       $this->descricao = $descricao;
       $this->dataEmissao = $dataEmissao;
       $this->revisao = $revisao;
       $this->distVendas = $distVendas;
       $this->distCompras = $distCompras;
       $this->distOperacionalAm = $distOperacionalAm;
       $this->distOperacionalSbc = $distOperacionalSbc;
       $this->distDirecao = $distDirecao;
       $this->distQualidade = $distQualidade;
       $this->distRh = $distRh;
       $this->path = $path;
   }

   function getId() {
       return $this->id;
   }

   function getSecaoNorma() {
       return $this->secaoNorma;
   }

   function getNumDocumento() {
       return $this->numDocumento;
   }

   function getDescricao() {
       return $this->descricao;
   }

   function getDataEmissao() {
       return $this->dataEmissao;
   }

   function getRevisao() {
       return $this->revisao;
   }

   function getDistVendas() {
       return $this->distVendas;
   }

   function getDistCompras() {
       return $this->distCompras;
   }

   function getDistOperacionalAm() {
       return $this->distOperacionalAm;
   }

   function getDistOperacionalSbc() {
       return $this->distOperacionalSbc;
   }

   function getDistDirecao() {
       return $this->distDirecao;
   }

   function getDistQualidade() {
       return $this->distQualidade;
   }

   function getDistRh() {
       return $this->distRh;
   }

   function getPath() {
       return $this->path;
   }

      
   
static function read ($conexao,$condicao='true'){

$query =$conexao->stmt_init();  
$sql="SELECT"
        . " id,"
        . "secao_norma,"
        . "num_documento,"
        . "descricao,"
        . "data_emissao,"
        . "revisao,"
        . "dist_vendas,"
        . "dist_compras,"
        . "dist_operacional_am,"
        . "dist_operacional_sbc,"
        . "dist_direcao,"
        . "dist_qualidade,"
        . "dist_rh,"
        . "path"
        . " FROM lista_mestra_documento WHERE $condicao ";

//testa se o query está correto
        
    if($query=$conexao->prepare($sql)){
        //passando variaveis para a query
        try{              
            $resultado=$query->execute();
            $query->bind_result($id,$secaoNorma,$numDocumento,$descricao,$dataEmissao,$revisao,$distVendas,$distaCompras,$distOperacionalAm,$distaOperacionalSbc,$distDirecao,$distQualidade,$distRh,$path);
            $listaResultado=array();
            
    while ($query->fetch()) {    
            $listaMestraDocumento= new ListaMestraDocumento($id,$secaoNorma,$numDocumento,$descricao,$dataEmissao,$revisao,$distVendas,$distaCompras,$distOperacionalAm,$distaOperacionalSbc,$distDirecao,$distQualidade,$distRh, $path); 
            array_push($listaResultado,$listaMestraDocumento);
            }//fim do while        
          //var_dump($listaResultado);
           //testa o resultado
            if (!$resultado) {
                $message  = 'Invalid query: ' . $conexao->error . "\n";
                //$message .= 'Whole query: ' . $resultado;
                die($message);
            }//end of if
        }//end of try
        catch(Exception $e){
            echo "erro";
        }
  
    }else{
        echo "Há um problema com a sintaxe inicial da query SQL";
    }
     
    return $listaResultado;

}//fim da função read    


    }