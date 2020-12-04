<?php

// Funcion saludar
// function salida($arg){
//     return "Hola ".$arg;
// }

// echo salida("Miguel Blanco");

// **********************************
// class Animal{
//     public $animal;
//     function __construct($arg){
//         $this->animal = $arg;
//         echo $this->saludar();
//     }

//     public function mostrar_animales(){
//         return $this->animal;
//     }

//     public function saludar(){
//         return "Hola usuario <br>";
//     }

// }

// $obj = new Animal(array("leon", "loro"));

// var_dump($obj->mostrar_animales());


// **********************************

// class Humanos extends Plantas {

//     function comer(){
//         //echo $this->beber();
//         return "comimos carne <br>";
//     }

// }


// class Animal extends Humanos {

//     function ciclo_vida(){
//         return "naci";
//     }
//     // function __construct(){
//     //     //echo $this->comer();
//     // }

// }

// class Plantas {

//     function beber(){
//         return "bebimos agua <br>";
//     }

// }

// $obj = new Humanos();

// echo $obj->comer();

// **************************
class Persona {

    public $persona;
    function __construct($arg){
        $this->persona = $arg;
        echo $this->mostrar_carros();
    }

    public function mostrar_carros(){
        return $this->persona;
    }


}


class Marca {

    public $opt;
    function __construct($arg){
        $this->opt = $arg;

    }
    
    function lugares(){
        //$this->opt = $arg;
        switch ($this->opt) {
            case 'a':
                return "Europeo";
                break;
            
            case 'b':
                return "Norteamericano";
                break;
        }

    }   

}


class Carros extends Marca {

    function modelos(){
        $lugar = $this->lugares();        
        switch ($lugar) {
            case 'Europeo':
                echo $lugar +" precio 100.000 dolares";
                break;
            
            case 'Norteamericano':
                echo $lugar + " precio 500.000 dolares";
                break;
        }
        
    }

}

$obj = new Carros("a");

echo $obj->modelos();


?>