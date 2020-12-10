<?php

$prueba ='';
class Crud{
    public function __construct($arg){
        $this->datos = $arg;
    }

    
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $obj = new informacion($_SERVER['HTTP_CLASE']($_POST['datos'],$_SERVER['HTTP_GUARDAR_PHP']));
}else{
    echo "No se ha creado el Epoint";


}







?>