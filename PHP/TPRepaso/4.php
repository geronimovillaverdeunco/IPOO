<?php 
//4. Dada un arreglo de números enteros, determinar los valores máximo y mínimo, y las posiciones en que éstos se encontraban en el arreglo.

$numeros = [10,5, -20, 3, 15,9, 22, 6, -5];

$valorMinimo = $numeros[0];
for($i = 0; $i<count($numeros);$i++){
    

    if($numeros[$i]<$valorMinimo){
        $valorMinimo = $numeros [$i];
        $posicionMinimo = $i;
    }
}

echo "Valor minimo: " . $valorMinimo . " , en la posicion " . $posicionMinimo;