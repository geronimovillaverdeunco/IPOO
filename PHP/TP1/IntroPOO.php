<?php

class Persona{
    //ATRIBUTOS
    private $nombre;
    private $edad;
    private $amiga;
    //METODO CONSTRUCTOR
    public function __construct($elNombre, $laEdad) {
       $this->nombre = $elNombre;
       $this->edad = $laEdad;
    }
    //GETTERS Y SETTERS
    //GETTERS o metodos observadores
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getAmiga(){
        return $this->amiga;
    }
    //SETTERS o METODOS MODIFICADORES
    public function setNombre($elNombre){
        $this->nombre = $elNombre;
    }
    public function setEdad($laEdad){
        $this->edad = $laEdad;
    }
    public function setAmiga($amigaNueva){
        $this->amiga = $amigaNueva;
    }
    //METODOS PROPIOS DE LA CLASE

    public function saludar(){
        return "Hola mi nombre es: " . $this->getNombre();
    }
    public function cumplirAnios($cuantosAnos){
        $this->edad+=$cuantosAnos;
    }

    //METODO TO STRING
    public function __toString() {
        return "Nombre: " . $this->getNombre() 
                .", Edad: " . $this->getEdad();
    }





}