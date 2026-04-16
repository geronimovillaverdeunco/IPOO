<?php 

include_once 'Persona.php';
include_once 'Argentino.php';

$persona1 = new Persona("Geronimo", "Villaverde");

$arg1 = new Argentino("Lionel", "Messi", "Barcelona");


echo $persona1->saludar() . PHP_EOL;
echo $arg1->saludar() . PHP_EOL;

echo "FUNCIONAA";



