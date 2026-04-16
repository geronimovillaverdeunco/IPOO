<?php

class Persona{
    private $nombre;
    private $apellido;

    public function __construct($nom, $ape){
        $this->nombre = $nom;
        $this->apellido = $ape;
    }
    public function saludar(){
        return "Hola soy una persona!!!!CLASE PERSONA";
    }
}