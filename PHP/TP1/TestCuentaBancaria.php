<?php

include_once 'CuentaBancaria.php';
include_once './TP2/Persona.php';

// $cuenta1 = new CuentaBancaria(1532, 41321375, 10000, 32);

// $cuenta1->depositar(5000);
// echo $cuenta1->getSaldoActual();

//  $cuenta1->retirar(520);
// echo $cuenta1->getSaldoActual();

$persona1 = new Persona("Geronimo", "Villaverde", "dni", 41321375);
$nuevaCuenta = new CuentaBancaria(3027, $persona1, 500, 20);
echo $nuevaCuenta->getDniCliente();


// $cuenta1->actualizarSaldo();
// echo $cuenta1->getSaldoActual();

// echo "\n";
// $cuenta1->actualizarSaldo();
// echo $cuenta1->getSaldoActual();

