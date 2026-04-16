<?php 

include_once 'Persona.php';

/*
b.
Crear un script Test_Persona que cree un objeto Persona e invoque a cada uno de los métodos implementados.*/ 
$persona = new Persona("Geronimo", "lopez", "444444");
echo $persona->getNombre() . "\n";
echo$persona->getApellido() . "\n";
echo $persona->getNumeroDocumento() . "\n";
$persona->setNombre("Lionel");
$persona->setApellido("Messi");
$persona->setNumeroDocumento("666");

echo "Nuevo nombre: " . $persona->getNombre() . "\n";
echo "Nuevo apellido: " . $persona->getApellido() . "\n";
echo "Nuevo DNI: " . $persona->getNumeroDocumento() . "\n";

echo $persona->__toString();

