<?php
 
if(isset($_SERVER["HTTP_CLASS"]) && isset($_SERVER["HTTP_TOKEN_METODO"]) && ($_SERVER["REQUEST_METHOD"] == "POST")){
    include("Token/Service_key.php");
    include("Token/Servive_token.php");
    if($obj->getInstance()){
        echo $obj->getInstance(false);
    }else{
        echo Mensajes::Clases_Methodo["Clase_Negativa"];
    }
}else if($_SERVER["REQUEST_METHOD"] == "GET"){
    $gota = $_SERVER["REQUEST_TIME"];
    echo "Crear Metodos : ".uniqid($gota);
    echo "<br>\n";
    echo "Crear Clase : ".sha1($gota);
}
?>