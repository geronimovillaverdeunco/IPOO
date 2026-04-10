<?php

echo "Cuantos paises vas a ingresar?:";
$cantPaises = trim(fgets(STDIN));

for($i=0; $i < $cantPaises; $i++){
    echo "Ingrese el pais n° " . $i+1;
    $paises [] = trim(fgets(STDIN));
}

function recorrerPaises($paises){
    foreach($paises as $pais){
        echo "Pais: " . $pais;
        echo "\n";
    }
}

recorrerPaises($paises);

if(in_array("peru", $paises)){
    echo "Peru esta en el array";
}else{
    echo "Peru NO esta";
}