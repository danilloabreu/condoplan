<?php

class Usuario{
    
    //variáveis do banco de dados
    private static $tableDb="usuario";    
    private static $tableColumns = array(
    "id"=>null,
    "usuario"=>null,
    "senha"=>null,
    "email"=>null,
    "acesso_projeto"=>null,
    "acesso_apr_projeto"=>null,
    "acesso_adm"=>null,
  );
    
    public $id;
    public $usuario;
    public $senha;
    public $email;
    public $acesso_projeto;
    public $acesso_apr_projeto;
    public $acesso_adm;
    
   
   
    public function __construct($id,$usuario,$senha,$email,$acesso_projeto,$acesso_apr_projeto,$acesso_adm) {
    $this->id= $id;
    $this->usuario=$usuario;
    $this->senha= $senha;
    $this->email= $email;
    $this->acesso_projeto= $acesso_projeto;
    $this->acesso_apr_projeto= $acesso_apr_projeto;
    $this->acesso_adm= $acesso_adm;
    }//fim do construtor 
    
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

    function getAcesso_projeto() {
        return $this->acesso_projeto;
    }


    function getAcesso_adm() {
        return $this->acesso_adm;
    }
    static function getTableColumns() {
        return self::$tableColumns;
    }

    function getAcesso_apr_projeto() {
        return $this->acesso_apr_projeto;
    }

        

public static function read ($conexao,$condicao){
    $sql="SELECT ";
    
    foreach(self::$tableColumns as $key => $keyValue){
        $sql.="$key,";        
    } 
    $sql=rtrim($sql, ',');
    $sql.=" FROM ".self::$tableDb;
    $sql.=" WHERE $condicao";
    $sqlStmt=$sql;

$param=array();    
    
    if (!is_string($sqlStmt) || empty($sqlStmt)) {
        return false;
    }

    // initialise some empty arrays
    $fields = array();
    $results = array();

    if ($stmt = $conexao->prepare($sqlStmt)) {
        // bind params if they are set
        if (!empty($params)) {
            $types = '';
            foreach($params as $param) {
                // set param type
                if (is_string($param)) {
                    $types .= 's';  // strings
                } else if (is_int($param)) {
                    $types .= 'i';  // integer
                } else if (is_float($param)) {
                    $types .= 'd';  // double
                } else {
                    $types .= 'b';  // default: blob and unknown types
                }
            }

            $bind_names[] = $types;
            for ($i=0; $i<count($params);$i++) {
                $bind_name = 'bind' . $i;       
                $$bind_name = $params[$i];      
                $bind_names[] = &$$bind_name;   
            }

            call_user_func_array(array($stmt,'bind_param'),$bind_names);
        }

        // execute query
        $stmt->execute();

        // Get metadata for field names
        $meta = $stmt->result_metadata();

        // This is the tricky bit dynamically creating an array of variables to use
        // to bind the results
        while ($field = $meta->fetch_field()) { 
            $var = $field->name; 
            $$var = null; 
            $fields[$var] = &$$var;
        }

        // Bind Results
        call_user_func_array(array($stmt,'bind_result'),$fields);

        // Fetch Results
        $i = 0;
        $listaResultado=array();
        $argObj = array();
        while ($stmt->fetch()) {
            $results[$i] = array();
            
            foreach($fields as $k => $v){
                
                $results[$i][$k] = $v;
                array_push($argObj,$v);
            }
            $class = new ReflectionClass(__CLASS__);
            //$args  = array('id','usuario','senha','email','acesso_qualidade','acesso_ambiental');
            $instance = $class->newInstanceArgs($argObj);
            array_push($listaResultado,$instance);
            $argObj = array();
            $i++;
            
        }

        // close statement
        $stmt->close();
    }
   // echo "<pre>";
    //print_r($results);
    //print_r($listaResultado);
    //echo "</pre>";
    return $listaResultado;
}

public static function checarLogin($usuario,$senha,$conexao){
     $listaUsuario = self::read($conexao,"usuario='$usuario' AND senha='$senha'");
     if(sizeof($listaUsuario)==1){
         return $listaUsuario[0];
     }else{
         return false;
     }
      
     
 }
  

}//fim da classe Usuario

