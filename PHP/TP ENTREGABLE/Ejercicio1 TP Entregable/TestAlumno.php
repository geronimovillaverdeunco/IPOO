<?php

// =======================
// Programa Principal
// =======================
include_once 'Alumno.php';
include_once 'Direccion.php';
// 1) Crear un objeto Direccion para "Av. Siempre Viva 742"

$direccion1 = new Direccion("Av. Siempre Viva", 742);

// 2) Crear un objeto Alumno llamado "Bart Simpson"

$alumnoBart = new Alumno("Bart", "Simpson", $direccion1);
// 3) Asignar la dirección al alumno usando delegación
$alumnoBart->setDireccion($direccion1);

// 4) Mostrar los datos completos del alumno

echo $alumnoBart->mostrarDatos(); 
