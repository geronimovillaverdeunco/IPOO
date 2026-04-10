<?php 

//2. Dado un número N retornar verdadero si el número es par y falso en caso contrario.

echo "Ingrese el numero N: ";
$n = trim(fgets(STDIN));

function parImpar($n){
    if($n % 2 == 0){
        return true;
    } else{
        
        return "EL num es impar";
    }
}

echo parImpar($n);