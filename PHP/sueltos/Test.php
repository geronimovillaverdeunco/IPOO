<?php

include "Tarjeta.php";
include "Alumno.php";

$persona = new Alumno("PEdroooo", 484848, "Roca 45");

$tarjetita = new Tarjeta(1532, $persona);

echo $tarjetita->getTitular()->getDocumento();

