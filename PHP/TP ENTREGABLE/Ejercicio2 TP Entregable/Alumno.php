<?php
// =======================
// Clase Alumno
// =======================
class Alumno {
    private $nombre;
    private $apellido;
    private $materias = []; // un arreglo de objetos Materia

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    // TODO: Crear un método agregarMateria($materia) que reciba un objeto Materia
    public function agregarMateria($materia){
        $this->materias[] = $materia;
    }
    // TODO: Crear un método mostrarMaterias() que liste el nombre de cada materia
    //       y su promedio de notas
    public function mostrarMaterias(){
        $cadena = " ";
        foreach($this->materias as $materia){
            $cadena.= $materia;
        }
        return $cadena;
    }


    // TODO EXTRA: Crear un método calcularPromedioGeneral() que saque el promedio de TODAS las materias
    public function calcularPromedioGeneral() {
        $cantidadMaterias = count($this->materias);
        if ($cantidadMaterias === 0) {
            return 0;
        }

        $sumaDePromedios = 0;

        foreach ($this->materias as $materia) {
            $sumaDePromedios += $materia->getPromedio(); 
        }
        return $sumaDePromedios / $cantidadMaterias;
    }
}   
