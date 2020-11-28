<?php

// $nombre = "Luis Miguel";
// $apellido = "Blanco Carrillo";

// echo $nombre." ".$apellido;

// $a =1;
// while ($a <= 10) {
//     echo "$a<br>";
//     $a++;
// }

// $lista = array("nombre" => "miguel", "apellido" => "blanco");
// var_dump($lista);

// $lista2 = array(
//     "numero1" => "miguel",
//     "apellido" => "blanco",
//     "lista" => array(
//         "numero1" => "0",
//         "numero2" => "1",
//     )
// );

// var_dump($lista2);

$lista3 = array("nombre" => "miguel", "apellido" => "blanco");
// foreach ($lista3 as $key => $value) {
//     if ($value == "miguel") {
//         echo $key."<br>";
//     }
    
// }

// $result = array_search("miguel", $lista3);
// var_dump($result);

//var_dump(array_keys($lista3));

// matrices
// $matriz = array(
//     array("casa","perro","pajaro"),
//     array("a","b","c"),
//     array("1","2","3"),
//     array("x","y","z")
// );

// var_dump($matriz[3][0]);

$matriz_asociativo = array(
        "terrestre" => array(
                        "perro",
                        "gato"
        ),
        "acuaticos" => array(
                        "ballena",
                        "delfin"
        ),
        "aereos" => array(
                        "loro",
                        "paloma"
        ),
);

var_dump($matriz_asociativo['acuaticos'][1]);


?>