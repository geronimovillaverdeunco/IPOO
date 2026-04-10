<?php
// =======================
// Clase Biblioteca
// =======================
include_once 'Libro.php';
class Biblioteca {
    private $nombre;
    private $libros = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // TODO: Crear un método agregarLibro($libro) que reciba un objeto Libro
    public function agregarLibro($libro){
        $this->libros[] = $libro;
    }
    // TODO: Crear un método mostrarLibrosDisponibles() que liste solo los libros que están disponibles
    public function mostrarLibrosDisponibles(){
        $librosDisponibles = [];
        $texto = "Libros disponibles: \n";
        foreach($this->libros as $libro){
            if($libro->estaDisponible()==true){
                $librosDisponibles [] = $libro;
                $texto .= $libro->mostrar() . " \n";
           }
            
        }
        return $texto;
    }

    // TODO: Crear un método devolverTotalPrestamos() devuelva la cantidad de prestamos totales de la biblioteca
    public function devolverTotalPrestamos(){
        
    }

    
}

