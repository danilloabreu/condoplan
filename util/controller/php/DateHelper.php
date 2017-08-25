<?php

class DateHelper{
    
    static function dataAtual(){
        $data=new DateTime();
        $data=$data->format('Y-m-d H:i:s');
        return $data;
    }//fim da função dataAtual()    

    
    static function formatar($data){
        $dataF = new DAteTime($data);
        $dataF=$dataF->format('d/m/Y');
        return $dataF;
    }
    
    
    }//fim da classe DateHelper
