<?php
class Service_menu extends Service_plantilla{
    public static $service_menu;
    public function __construct(){
  
    }
    public static function getInstance() {
        if (!(self::$service_menu instanceof self) ) {
            self::$service_menu = new Service_menu();
        }
        return self::$service_menu;
    } 
    public function Menu_PC($_PLANTILLA=NULL, $_AJAX=NULL, $_DATA=NULL){
        // $_AJAX = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        // return "Hola ".$_AJAX["Nombre"]." ".$_AJAX["Apellido"]." ".$_DATA['Mensaje'];
        $datos =[];
        $datos["Datos"] = $_DATA;
        $datos["Plantilla"] = $this->reemplazar_datos_plantilla($_PLANTILLA,$_AJAX);
        return json_encode($datos, JSON_PRETTY_PRINT);
    }
}
?>