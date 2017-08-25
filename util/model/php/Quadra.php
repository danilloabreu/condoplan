<?php

class Quadra{
    
    //variáveis do banco de dados
    private static $tableDb="quadra";    
    private static $tableColumns = array(
    "id"=>null,
    "quadra"=>null,
  );
    
    public $id;
    public $quadra;
  
    
    function getId() {
        return $this->id;
    }

    function getQuadra() {
        return $this->quadra;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setQuadra($quadra) {
        $this->quadra = $quadra;
    }

    function __construct($id, $quadra) {
        $this->id = $id;
        $this->quadra = $quadra;
    }

    
    
public static function read ($conexao,$condicao="true"){
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


}//fim da classe Quadra

