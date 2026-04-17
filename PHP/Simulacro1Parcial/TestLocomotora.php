<?php 

include_once 'Locomotora.php';

$locom = new Locomotora(500, 120);

echo $locom->__toString();

$locom->setPesoLocomotora(151331);
$locom->setVelocidadMaximaLocomotora(160);

echo $locom->__toString();

