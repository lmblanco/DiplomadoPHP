<?php

include('Service_Validar.php');

$ser_val = new Service_Validar();

var_dump($ser_val->Acceso($_SERVER['HTTP_TOKEN_SERVER']));




?>