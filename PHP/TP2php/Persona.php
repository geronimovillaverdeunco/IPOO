<?php 
/*6)
Implementar una clase Persona con los atributos: nombre, apellido y número de documento.*/
class Persona{
    private $nombre;
    private $apellido;
    private $numeroDocumento;


/*
a.
Definir en la clase los siguientes métodos:
•
Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la clase.*/
    public function __construct($nom, $ape, $numDoc){
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->numeroDocumento = $numDoc;
    }
/*
•
Los métodos de acceso de cada uno de los atributos de la clase.*/ 
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getNumeroDocumento(){
        return $this->numeroDocumento;
    }
    public function setNombre($nom){
        $this->nombre = $nom;
    }
    public function setApellido($ape){
        $this->apellido = $ape;
    }
    public function setNumeroDocumento($numDoc){
        $this->numeroDocumento = $numDoc;
    }
/*
•
Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.*/
    public function __toString(){
        $cadena= "Nombre: " . $this->getNombre() . "\n" .
                "Apellido: " . $this->getApellido() . "\n" . 
                "DNI: " . $this->getNumeroDocumento() ;
        return $cadena;
    }



}