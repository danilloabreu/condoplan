<?php

class Proposta{
    public $id;
    public $quadra;
    public $lote;
    public $corretor;
    public $comprador;
    public $rendaLiquida;
    public $entradaLiquida;
    public $numParcela;
    public $valorParcela;
    public $valorVenda;
    public $isContratoAssinado;
    public $isContratoEmitido;
    public $dataInsert;
    public $dataUpdate;
    public $status;
    public $isFinished; 
    public $idMae;
    public $isChanged;
    public $isDeleted;
    public $revisao;
    
    function __construct($id,$idMae, $quadra, $lote, $corretor, $comprador, $rendaLiquida, $entradaLiquida, $numParcela, $valorParcela, $valorVenda, $isContratoAssinado, $isContratoEmitido, $dataInsert, $dataUpdate, $status, $isFinished, $isChanged, $isDeleted, $revisao) {
        $this->id = $id;
        $this->idMae = $idMae;
        $this->quadra = $quadra;
        $this->lote = $lote;
        $this->corretor = $corretor;
        $this->comprador = $comprador;
        $this->rendaLiquida = $rendaLiquida;
        $this->entradaLiquida = $entradaLiquida;
        $this->numParcela = $numParcela;
        $this->valorParcela = $valorParcela;
        $this->valorVenda = $valorVenda;
        $this->isContratoAssinado = $isContratoAssinado;
        $this->isContratoEmitido = $isContratoEmitido;
        $this->dataInsert = $dataInsert;
        $this->dataUpdate = $dataUpdate;
        $this->status = $status;
        $this->isFinished = $isFinished;
        $this->isChanged = $isChanged;
        $this->isDeleted = $isDeleted;
        $this->revisao = $revisao;
    }

// <editor-fold desc="get">
    function getId() {
        return $this->id;
    }

    function getQuadra() {
        return $this->quadra;
    }

    function getLote() {
        return $this->lote;
    }

    function getCorretor() {
        return $this->corretor;
    }

    function getComprador() {
        return $this->comprador;
    }

    function getRendaLiquida() {
       
        return  $this->rendaLiquida;
    }

    function getEntradaLiquida() {
        return $this->entradaLiquida;
    }

    function getNumParcela() {
        return $this->numParcela;
    }

    function getValorParcela() {
        return $this->valorParcela;
    }

    function getValorVenda() {
        return $this->valorVenda;
    }

    function getIsContratoAssinado() {
        return $this->isContratoAssinado;
    }

    function getIsContratoEmitido() {
        return $this->isContratoEmitido;
    }

    function getDataInsert() {
        return $this->dataInsert;
    }

    function getDataUpdate() {
        return $this->dataUpdate;
    }

    function getStatus() {
        return $this->status;
    }

    function getIsFinished() {
        return $this->isFinished;
    }

    function getIdMae() {
        return $this->idMae;
    }

    function getIsChanged() {
        return $this->isChanged;
    }

    function getIsDeleted() {
        return $this->isDeleted;
    }
    function getRevisao() {
        return $this->revisao;
    }


// </editor-fold>

// <editor-fold desc="set">
    function setId($id) {
        $this->id = $id;
    }

    function setQuadra($quadra) {
        $this->quadra = $quadra;
    }

    function setLote($lote) {
        $this->lote = $lote;
    }

    function setCorretor($corretor) {
        $this->corretor = $corretor;
    }

    function setComprador($comprador) {
        $this->comprador = $comprador;
    }

    function setRendaLiquida($rendaLiquida) {
        $this->rendaLiquida = $rendaLiquida;
    }

    function setEntradaLiquida($entradaLiquida) {
        $this->entradaLiquida = $entradaLiquida;
    }

    function setNumParcela($numParcela) {
        $this->numParcela = $numParcela;
    }

    function setValorParcela($valorParcela) {
        $this->valorParcela = $valorParcela;
    }

    function setValorVenda($valorVenda) {
        $this->valorVenda = $valorVenda;
    }

    function setIsContratoAssinado($isContratoAssinado) {
        $this->isContratoAssinado = $isContratoAssinado;
    }

    function setIsContratoEmitido($isContratoEmitido) {
        $this->isContratoEmitido = $isContratoEmitido;
    }

    function setDataInsert($dataInsert) {
        $this->dataInsert = $dataInsert;
    }

    function setDataUpdate($dataUpdate) {
        $this->dataUpdate = $dataUpdate;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setIsFinished($isFinished) {
        $this->isFinished = $isFinished;
    }

    function setIdMae($idMae) {
        $this->idMae = $idMae;
    }

    function setIsChanged($isChanged) {
        $this->isChanged = $isChanged;
    }

    function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }
    function setRevisao($revisao) {
        $this->revisao = $revisao;
    }   

// </editor-fold>


public function create ($conexao){
    
    $id                 = $this->getId();
    $quadra             = $this->getQuadra();
    $lote               = $this->getLote();
    $corretor          = $this->getCorretor();
    $comprador          = $this->getComprador();
    $rendaLiquida       = $this->getRendaLiquida();
    $entradaLiquida     = $this->getEntradaLiquida();
    $numParcela         = $this->getNumParcela();
    $valorParcela       = $this->getValorParcela();
    $valorVenda         = $this->getValorVenda();
    $isContratoAssinado = $this->getIsContratoAssinado();
    $isContratoEmitido  = $this->getIsContratoEmitido();
    $dataInsert         = $this->getDataInsert();
    $dataUpdate         =$this->getDataUpdate();
    $status             =$this->getStatus();
    $isFinished         =$this->getIsFinished();
    $revisao            =$this->getRevisao();
    
    
    //inicia a conexão com o banco de dados    
    $query =$conexao->stmt_init();    
    
    $sql="INSERT INTO proposta (id,quadra,lote,corretor,comprador,renda_liquida,entrada_liquida,num_parcela,valor_parcela,valor_venda,is_contrato_assinado,is_contrato_emitido,date_insert,date_update,status,is_finished,revisao)"
            . " VALUES ($id,$quadra,$lote,'$corretor','$comprador',$rendaLiquida,$entradaLiquida,$numParcela,$valorParcela,$valorVenda,'$isContratoAssinado','$isContratoEmitido','$dataInsert',$dataUpdate,'$status','$isFinished','$revisao')";
    //testa se o query está correto
        if($query=$conexao->prepare($sql)){
            //passando variaveis para a query
            try{            
                //executa a query           
                $resultado=$query->execute();
                    //testa o resultado
                     if (!$resultado) {
                        $message  = 'Invalid query: ' . $conexao->error . "\n";
                        die($message);
                    }
            }
            catch(Exception $e){
                echo "Problema";
                }
        }else{
            echo "Há um problema com a sintaxe inicial da query SQL <br>";
            echo $sql;
             }
}

static function read ($conexao,$condicao='true'){

$query =$conexao->stmt_init();  
$sql="SELECT id,id_mae,quadra,lote,corretor,comprador,renda_liquida,entrada_liquida,num_parcela,valor_parcela,valor_venda,is_contrato_assinado,is_contrato_emitido,date_insert,date_update,status,is_changed,is_finished,is_deleted,revisao FROM proposta WHERE $condicao ";

//testa se o query está correto
        
    if($query=$conexao->prepare($sql)){
        //passando variaveis para a query
        try{              
            $resultado=$query->execute();
            $query->bind_result($id,$idMae, $quadra, $lote, $corretor, $comprador, $rendaLiquida, $entradaLiquida, $numParcela, $valorParcela, $valorVenda, $isContratoAssinado, $isContratoEmitido, $dataInsert, $dataUpdate, $status,$isChanged, $isFinished, $isDeleted, $revisao);
            $listaResultado=array();
            
    while ($query->fetch()) {    
            $proposta= new Proposta($id,$idMae, $quadra, $lote, $corretor, $comprador, $rendaLiquida, $entradaLiquida, $numParcela, $valorParcela, $valorVenda, $isContratoAssinado, $isContratoEmitido, $dataInsert, $dataUpdate, $status,$isChanged, $isFinished, $isDeleted,$revisao); 
            array_push($listaResultado,$proposta);
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
    
    
}//fim da classe Proposta

