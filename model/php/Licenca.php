<?php

class Licenca{
    
   public $id;
   public $descricao;
   public $tipo;
   public $orgao;
   public $base;
   public $validade;
   public $emissao;
   public $file;
   public $isValid;
    
   function __construct($id, $descricao, $tipo, $orgao, $base, $validade, $emissao, $file, $isValid) {
       $this->id = $id;
       $this->descricao = $descricao;
       $this->tipo = $tipo;
       $this->orgao = $orgao;
       $this->base = $base;
       $this->validade = $validade;
       $this->emissao = $emissao;
       $this->file = $file;
       $this->isValid = $isValid;
   }

   function getId() {
       return $this->id;
   }

   function getDescricao() {
       return $this->descricao;
   }

   function getTipo() {
       return $this->tipo;
   }

   function getOrgao() {
       return $this->orgao;
   }

   function getBase() {
       return $this->base;
   }

   function getValidade() {
       return $this->validade;
   }

   function getEmissao() {
       return $this->emissao;
   }

   function getFile() {
       return $this->file;
   }

   function getIsValid() {
       return $this->isValid;
   }

   
   
static function read ($conexao,$condicao='true'){

$query =$conexao->stmt_init();  
$sql="SELECT"
        . " id,"
        . "descricao, "
        . "tipo,"
        . "orgao,"
        . "base,"
        . "validade,"
        . "emissao,"
        . "file,"
        . "is_valid"
        . " FROM licenca WHERE $condicao ";

//testa se o query está correto
        
    if($query=$conexao->prepare($sql)){
        //passando variaveis para a query
        try{              
            $resultado=$query->execute();
            $query->bind_result($id, $descricao, $tipo, $orgao, $base, $validade, $emissao, $file, $isValid);
            $listaResultado=array();
            
    while ($query->fetch()) {    
            $listaLicenca= new Licenca($id, $descricao, $tipo, $orgao, $base, $validade, $emissao, $file, $isValid); 
            array_push($listaResultado,$listaLicenca);
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