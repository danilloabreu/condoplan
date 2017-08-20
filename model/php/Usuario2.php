<?php

class Usuario1{
    
      public  $id;
      public  $usuario;
      public  $senha;
      public  $email;
      public  $acesso_qualidade;
      public  $acesso_ambiental;
  
      function __construct($id, $usuario, $senha, $email, $acesso_qualidade) {
          $this->id = $id;
          $this->usuario = $usuario;
          $this->senha = $senha;
          $this->email = $email;
          $this->acesso_qualidade = $acesso_qualidade;
      }

      function getId() {
          return $this->id;
      }

      function getUsuario() {
          return $this->usuario;
      }

      function getSenha() {
          return $this->senha;
      }

      function getEmail() {
          return $this->email;
      }

      function getAcesso_qualidade() {
          return $this->acesso_qualidade;
      }
      
       function getAcesso_ambiental() {
          return $this->acesso_ambiental;
      }

        
 public static function read($conexao,$condicao=true){
     
  $sql="SELECT id,usuario,senha,email,acesso_qualidade FROM usuario WHERE $condicao";
    
     
 //testa se o query está correto 
    if($query=$conexao->prepare($sql)){
        //passando variaveis para a query
        try{              
            $resultado=$query->execute();
            $query->bind_result($id,$usuario,$senha,$email,$acesso_qualidade);
            $listaResultado=array();
            
    while ($query->fetch()) {
            
            $usuario=new Usuario($id,$usuario,$senha,$email,$acesso_qualidade);
            //var_dump($usuario);
            array_push($listaResultado,$usuario);
            }//fim do while        
            //var_dump($listaResultado);
           //testa o resultado
            if (!$resultado) {
                $message  = 'Invalid query: ' . $conexao->error . "\n";
                
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
 
 public static function checarLogin($usuario,$senha,$conexao){
     $listaUsuario = self::read($conexao,"usuario='$usuario' AND senha='$senha'");
     if(sizeof($listaUsuario)==1){
         return $listaUsuario[0];
     }else{
         return false;
     }
      
     
 }


}//fim da classe Usuario
