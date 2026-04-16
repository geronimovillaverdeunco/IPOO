<?php

echo Date("Y");
$libro1 = [1234, "Lord of the rings", 2001, "Planeta", "JRR", "Tolkien"];
$libro2 = [1333, "Harry Potter", 2003, "De Bolsillo", "JK", "Rowlin"];
$libro3 = [1234, "Bajo la misma estrella", 2011, "Unicornio", "Peter", "Wood"];
$libro4 = [1234, "Sapiens", 2015, "Planeta", "Yuval", "Nohari"];
$libro5 = [1234, "Winning Ugly", 1974, "Importados", "Brad", "Gilbert"];
$libro6 = [1234, "Tennis Mental", 1980, "Planeta", "Tim", "Galloway"];

$libros = [$libro1, $libro2, $libro3, $libro4, $libro5, $libro6];

function mostrarDatos($arr){
    foreach($arr as $libross){
        foreach($libross as $valor){
            echo  $valor . "\n";
        }
    }
}


