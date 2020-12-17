<?php
class Service_index extends Service_plantilla{
    public static $service_index;
    public function __construct(){
  
    }
    public static function getInstance() {
        if (!(self::$service_index instanceof self) ) {
            self::$service_index = new Service_index();
        }
        return self::$service_index;
    } 
    public function Session1($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        $datos =[];
        $datos["Datos"] = $_DATA;
        $datos["Plantilla"] = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
    public function Session_curso($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        $datos =[];
        $datos["Datos"] = $_DATA;
        $datos["Plantilla"] = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
    public function Session_perfil($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        $datos =[];
        $datos["Datos"] = $_DATA;
        $datos["Plantilla"] = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
}
?>