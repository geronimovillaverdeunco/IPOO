<?php 
include_once 'CuentaBancaria.php';
include_once 'Persona.php';

/*b.
Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada uno de los métodos implementados.*/ 

$cliente = new Persona("Augusto", "Cabezas", 30273027);


$cuentaBancaria = new CuentaBancaria(1532, $cliente,100000, 20);

echo $cuentaBancaria->getDatosCliente() . "\n";

echo $cuentaBancaria->getNumeroCuenta() . "\n";
echo $cuentaBancaria->getSaldoActual() . "\n";

$cuentaBancaria->depositar(14515);

echo $cuentaBancaria->getSaldoActual() . "\n";


$cuentaBancaria->retirar(12133131);
echo $cuentaBancaria->getSaldoActual() . "\n";

 

