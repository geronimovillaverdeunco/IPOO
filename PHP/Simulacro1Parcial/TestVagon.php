<?php

include_once 'Vagon.php';

$vagoncito = new Vagon( 2005, 20, 5, 150, 10);

echo $vagoncito->__toString();

if($vagoncito->incorporarPasajeroVagon(100)){
    echo "Pasajeros incorporados con exito";
}else{
    echo "Error al incorporar los pasajeros";
}

echo $vagoncito->__toString();

