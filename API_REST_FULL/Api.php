<?php

header('Access-Control-Allow-Origin: *');
// class Seguridad(){
//     protected function Token($token){
//         if ($token == "123") {
//             return true;
//         }else{
//             return false;
//         }

//     }

// }


class Crud extends Seguridad {
    private $datos;
    public function __construct($arg,$token){
        $this->datos = $arg;
        if ($this->Token($token)) {
            $this->Guardar();
        } 
    }

    protected function Guardar(){
        $f = fopen("datos.json", "w+");
        fwrite($f, json_decode($this->datos));
        fclose($f);
    }
    
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $obj = new $_SERVER["HTTP_CLASE"]($_POST["datos"],$_SERVER["HTTP_GUARDAR_PHP"]);
}else{
    echo "No se ha creado el Epoint por el metodo".$_SERVER["REQUEST_METHOD"];


}







?>