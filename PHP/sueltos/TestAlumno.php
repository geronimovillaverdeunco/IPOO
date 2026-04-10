<?php 

include "Alumno.php";

$alumno = new Alumno("geronimo", 41321375, "Nac Unidas 2244");

echo $alumno->__toString();
$alumno->setNombre("Marilyn");
echo $alumno->__toString();
