<?php 

//Dado dos números N y M retornar verdadero si el número N es divisible por M y falso en caso contrario.

echo "Ingrese el numero N: ";
$n = trim(fgets(STDIN));
echo "Ingrese el numero M: ";
$m = trim(fgets(STDIN));

function esDivisible($n1, $m1){
    if($n1 % $m1 ==0){
        return "N es divisible por M";
    }else{
        return "No son divisibles";
    }
}

echo esDivisible($n, $m);