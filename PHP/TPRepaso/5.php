<?php
//5. Cree una función leerNombres, cuyo parámetro de entrada formal es una cantidad n de nombres (ciclo definido), que solicite a un usuario los n nombres y los almacene en un arreglo indexado. aa función debe retornar el arreglo indexado.

echo "Ingrese la cantidad de nombres a leer: ";
$num = trim(fgets(STDIN));

function leerNombres($n){
    for($i = 0; $i<$n;$i++){
        echo "Nombre n° " . $i . ": ";
        $nombres[$i] = trim(fgets(STDIN));
    }
    return $nombres ;
}

print_r(leerNombres($num));