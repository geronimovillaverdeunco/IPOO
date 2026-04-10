<?php


$maximo = 4;
$frutas = [];

echo "Ingresa frutas (escribe 'salir' para terminar):\n";

while (true) {
    echo "Nueva fruta: ";
    $entrada = trim(fgets(STDIN));

    if (strtolower($entrada) === 'salir') {
        break;
    }

    // 1. Agregamos la fruta al final del array
    $frutas[] = $entrada;

    // 2. Si superamos el máximo, eliminamos el primer elemento (el más viejo)
    if (count($frutas) > $maximo) {
        array_shift($frutas);
    }

    // Mostramos el estado actual del array
    echo "Lista actual (máximo 4): " . implode( $frutas) . "\n";
}

echo "Proceso finalizado.";


