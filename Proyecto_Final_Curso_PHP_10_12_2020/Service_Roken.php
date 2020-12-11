<?php

class Service_Token{

    public static $servicio_token;
    private $token_validar = "";
    public function __construct(){

    }
    public static function getInstance() {
        if ( !(self::$servicio_token instanceof self) ) {
            self::$servicio_token = new self();
        }
        return self::$servicio_token;
    }

    private function Archivo($arg,$arg2){
        return $this->Archivo($arg,$this->token_validar);
    }



}


?>