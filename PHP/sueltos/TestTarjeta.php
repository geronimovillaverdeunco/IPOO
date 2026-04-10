<?php 

include "Tarjeta.php";

$tarj = new Tarjeta(151515, "Geronimo Villavered");

echo $tarj->getTitular();