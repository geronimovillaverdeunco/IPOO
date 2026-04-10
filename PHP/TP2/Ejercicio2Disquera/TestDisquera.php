<?php

include_once 'Disquera.php';
include_once './TP2/Persona.php';

$juan = new Persona("Juan", "Messi", "Dni", 414141);

$disquera1 = new Disquera(10, 21, "abierto", "Roca 55",  $juan);

echo $disquera1->__toString();