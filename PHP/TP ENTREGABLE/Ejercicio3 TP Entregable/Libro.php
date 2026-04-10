<?php
// =======================
// Clase Libro
// =======================
class Libro {
    private $titulo;
    private $autor;
    private $disponible = true;
    private $cantidadPrestamos=0;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    // TODO: Crear un método prestar() que marque el libro como NO disponible
    //       pero solo si está disponible. Si ya está prestado, mostrar un mensaje de error.
    //      además, deberá actualizar la cantidad de veces que se prestó el libro.
    public function prestar(){
        if($this->disponible){
            $this->disponible=false;
            $this->cantidadPrestamos++;
            $msj ="LIBRO PRESTADO CON EXITO";
        }else{
            $msj= "EL LIBRO NO ESTA DISPONIBLE";
        }
        return $msj;
    }

    // TODO: Crear un método devolver() que lo marque como disponible nuevamente.
    public function devolver(){
        $this->disponible=true;
        return "Libro devuelto con exito";
    }

    // TODO: Crear un método mostrarInfo() que imprima: "Titulo (Autor) - Disponible/Prestado - y cantidad de Prestamos"
    public function mostrar(){
        return $this->titulo;

    }
    
    // TODO: Crear un método estaDisponible() que devuelva true/false según corresponda.
    //       Pueden utilizar este método en algun lado? SI EN BIBLIOTECA para los disponibles
    public function estaDisponible(){
        if($this->disponible){
            $disp = true;
        }else{
            $disp= false;
        }
        return $disp;
    } 

    // TODO: Crear los métodos setter y getters de todos los atributos.
}


 