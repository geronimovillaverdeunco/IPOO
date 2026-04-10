<?php

include_once("IntroPOO.php");


$personaNueva = new Persona("Daniela", 45);

$personaNueva->setNombre("Florencia");
//echo $personaNueva->saludar();

$personaNueva->cumplirAnios(5);
$personaNueva->cumplirAnios(10);
$personaNueva->cumplirAnios(2);
//echo $personaNueva;


$persona2 = new Persona("Josefina", 22);

$personaNueva->setAmiga($persona2);

echo $personaNueva->getAmiga();

