<?php 

/*
3)
Un teatro se caracteriza por su nombre y su dirección y en él se realizan 4 funciones al día. Cada función tiene un nombre y un precio.
a.
Realice el diseño de la clase Teatro e indique qué métodos tendría que tener la clase, teniendo en cuenta que se pueda cambiar el nombre del teatro y la dirección, el nombre de una función y el precio.*/
class Teatro{
    private $nombre;
    private $direccion;
    private $nombreFuncion;
    private $precioFuncion;

/*b.
Implementar las 4 funciones usando un array de array asociativo. Cada función es un array asociativo con las claves “nombre” y “precio”.*/
    public function __construct($nombre, $direcc, $nombreFunc, $precioFunc){
        $this->nombre = $nombre;
        $this->direccion = $direcc;
        $this->nombreFuncion = $nombreFunc;
        $this->precioFuncion = $precioFunc;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getNombreFuncion(){
        return $this->nombreFuncion;
    }
    public function getPrecioFuncion(){
        return $this->precioFuncion;
    }
    public function setNombre($elNombre){
        $this->nombre = $elNombre;
    }
    public function setDireccion($laDireccion){
        $this->direccion = $laDireccion;
    }
    public function setNombreFuncion($elNombreFunc){
        $this->nombreFuncion = $elNombreFunc;
    }
    public function setPrecioFuncion($elprecio){
        $this->precioFuncion = $elprecio;
    }
    public function __toString(){
        $cadena = "Nombre Teatro: " . $this->getNombre() . "\n" . 
                  "Direccion Teatro: " . $this->getDireccion() . "\n" . 
                  "Nombre Funcion: " .$this->getNombreFuncion() . "\n" . 
                  "Precio Funcion: " . $this->getPrecioFuncion() ;
        return $cadena;
    }
/*c.
Crear un script de TestTeatro que cree un objeto Teatro con sus cuatro funciones, muestre los datos del teatro y las funciones y luego cambie el precio de todas las funciones aumentando el valor en un 50 %. Luego, muestre nuevamente los datos. */
}
$teatro1 = new Teatro("Colon", "Roca 1331", "Montaña secreto", 500);
echo $teatro1;