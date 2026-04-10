<?php 

include_once("Login.php");

$usuario1 = new Login("Geronimo2901", "gero2727", "Tu nombre y edad");

echo $usuario1->getNombreUsuario() . "\n";
$usuario1->setNombreUsuario("Gero de Cipo");
echo $usuario1->getNombreUsuario() . "\n";
echo $usuario1->getContrasena() . "\n";



$usuario1->cambiarContrasena("nuevaclaveeeee");
echo $usuario1->getContrasena() . "\n";

$usuario1->cambiarContrasena("gero2727");

echo $usuario1->getContrasena() . "\n";
var_dump($usuario1->getUltimasContrasenas()) ;

$usuario1->cambiarContrasena("ahoraNueva");
echo $usuario1->getContrasena() . "\n";
var_dump($usuario1->getUltimasContrasenas()) ;


echo $usuario1;




