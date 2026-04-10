<?php
// =======================
// Clase Direccion
// =======================
class Direccion {
    private $calle;
    private $numero;

    public function __construct($calle, $numero) {
        $this->calle = $calle;
        $this->numero = $numero;
    }   
    public function getCalle(){
        return $this->calle;
    }
    public function getNumero(){
        return $this->numero;
    }
    // TO DO: Crear un método getDireccionCompleta() que devuelva "Calle Numero"
    public function getDireccionCompleta(){
        $cadena = $this->getCalle() . " " . $this->getNumero() ;
        return $cadena;
    }
}

