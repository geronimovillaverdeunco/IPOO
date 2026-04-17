<?php 

/*En la clase Locomotora:
✔
 
Se registra la siguiente información: su peso, y velocidad máxima.
✔*/
class Locomotora{
    private $peso;
    private $velocidadMaxima;
/*Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.*/ 
    public function __construct($pesoLocomotora, $velMax){
        $this->peso = $pesoLocomotora;
        $this->velocidadMaxima = $velMax;
    }

/*
✔
Los métodos de acceso de cada uno de los atributos de la clase.*/ 
    public function getPesoLocomotora(){
        return $this->peso;
    }
    public function getVelocidadMaximaLocomotora(){
        return $this->velocidadMaxima;
    }
    public function setPesoLocomotora($peso){
        $this->peso = $peso;
    }
    public function setVelocidadMaximaLocomotora($velMax){
        $this->velocidadMaxima = $velMax;
    }

/*
✔
Redefinir el método toString para que retorne la información de los atributos de la clase. */
    public function __toString(){
        $cadena = "Peso Locomotora: " . $this->getPesoLocomotora() . "\n" . 
                "Velocidad maxima locomotora: " . $this->getVelocidadMaximaLocomotora() . "\n";
        return $cadena;
    }
}