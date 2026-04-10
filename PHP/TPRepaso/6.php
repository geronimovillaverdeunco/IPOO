<?php 
//6. Dado un número que se corresponde a un año calendario, retornar un arreglo con todos los años bisiestos menores al año ingresado.
// Nota: Un año es bisiesto cuando es múltiplo de cuatro, exceptuando los múltiplos de 100 que no lo sean de 400

echo "Ingrese el año a examinar si es bisiesto: ";
$añoMaximo = trim(fgets(STDIN)); 

function esBisiesto($añoMaximo){
    $añosBisiestos = [];
    for($año = 1; $año<$añoMaximo; $año++){
    if(($año % 4 == 0 && $año % 100 != 0) || $año % 400 == 0  ){
        $añosBisiestos[] = $año;
    }
}
return $añosBisiestos;
}

print_r(esBisiesto($añoMaximo)) ;

