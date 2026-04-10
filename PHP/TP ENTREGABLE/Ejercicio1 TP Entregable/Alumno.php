
<?php


// =======================
// Clase Alumno
// =======================
class Alumno {
    private $nombre;
    private $apellido;
    private $direccion; // Delegación -> un Alumno tiene una Direccion
    
    public function __construct($nombre, $apellido, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        // TODO Completar con los datos faltantes para inicializar todo el objeto completo
        
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    // TODO: Crear un método setDireccion($direccion) que reciba un objeto Direccion
    public function setDireccion($laDireccion){
        $this->direccion = $laDireccion;
    }
    // TODO: Crear un método mostrarDatos() que imprima el nombre, apellido y dirección completa del alumno
    public function mostrarDatos(){
        $datos = "Nombre: " . $this->getNombre() .
         ", Apellido: " . $this->getApellido() . 
         ", Direccion: " . $this->getDireccion()->getDireccionCompleta();
        return $datos;
    }
}


