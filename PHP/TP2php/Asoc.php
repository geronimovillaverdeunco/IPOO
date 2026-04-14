<?php

$frutas = ["Manzana", "Pera", "Sandia", "Kiwi"];

 function mostrarFrutas($arr) {
     $cadena = "";
     foreach($arr as $elemento){
         $cadena.= "La fruta se llama: " . $elemento . "\n";
     }
     return $cadena;
 }
//  function mostrarFrutas($arr) {
//      return "La fruta se llama: " . implode("\nLa fruta es: ", $arr) . "\n";
//  }

echo mostrarFrutas($frutas);

$geronimo = [
    "Nombre" => "Geronimo",
    "Apellido"=> "Villaverde",
    "Edad" => 27
];
function mostrarDatos($arr){
    $datos = "";
    foreach($arr as $llave => $gero){
        $datos.= $llave . ": " . $gero . "\n";
    }
    return $datos;
}
echo mostrarDatos($geronimo);

$empleado1 = [
     "Nombre" => "Juan",
    "Apellido"=> "Perez",
    "Edad" => 28
];
$empleado2 = [
     "Nombre" => "Mili",
    "Apellido"=> "Monacci",
    "Edad" => 19
];
$empleado3 = [
     "Nombre" => "Abuela",
    "Apellido"=> "Mirta",
    "Edad" => 78
];
$empleados=[$empleado1, $empleado2, $empleado3];
function mostrarEmpleados($arr){
    $cad = "";
    foreach($arr as $emp){
        foreach($emp as $clave=>$dato){
            $cad.= $clave . ": " . $dato . "\n";
        }
    }
    return $cad;
}
echo mostrarEmpleados($empleados);