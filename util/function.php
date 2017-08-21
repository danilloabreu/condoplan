<?php

//função para cria select com quantidade e classe
function htmlSelect ($qtd, $class){
    
    $select="<select class='$class'>";
        
        for ($i=1; $i<=$qtd; $i++){
            $select.="<option value='$i'>$i</option>";
        }
$select.="</select>";
    echo $select;
}//fim da função htmlSelect

//função para criar select a partir de um array unidimensional
function htmlSelectArray ($array,$id="",$name="",$required="",$class){
    
    $select="<select id='$id' name='$name' required='$required' class='$class'>";
        
        foreach($array as $val ){
        $select.="<option value='$val'>$val</option>";    
        }
            
$select.="</select>";
    return $select;
}//fim da função criar select a partir de um array


