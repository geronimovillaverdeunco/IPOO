<?php

//Dado un número N retornar su factorial.
echo "Ingrese el numero N a obtener su factorial: ";
$n = trim(fgets(STDIN));

function obtenerFactorial($num){
    if($num == 0){
    return "El factorial de 0 es: 1.";
} else{
    $factorial = 1;
    for($i=$num; $i>1; $i--){
        $factorial = $factorial * $i;
        
    }
    return $factorial;
}
}
echo "El factorial de " . $n . " es: " .obtenerFactorial($n);