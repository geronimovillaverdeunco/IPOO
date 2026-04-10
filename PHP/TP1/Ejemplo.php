<?php

 $trabajos  = "hola";


$empleado1 = [

    "Nombre" => "Daniela",

    "Apellido" => "Perez",

    "Edad " => 32,

    "Trabajos" => $trabajos

];






$empleado2 = [

    "Nmbore" => "Geronimo",

    "Apellido" => "Messi",

    "Edad " => 22,

    "Trabajos" => "capo"

];
$empleado3 = [

    "Nombre" => "Karina",

    "Apellido" => "Lopez",

    "Edad " => 20,

    "Trabajos" => "ninguno"

];

$empleados = [$empleado1, $empleado2, $empleado3];


foreach($empleados as $clave => $valor){ //CLAVE es 0,1,2 VALOR ES EMPLEADO1...

        foreach($valor as $llave => $valorcito){

            echo $llave . " es: " . $valorcito . "\n";

        }

    

}

