<?php
// =======================
// Clase Materia
// =======================
class Materia {
    private $nombre;
    private $notas = []; // un arreglo de enteros

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // TODO: Crear un método agregarNota($nota) que sume una nota al array
    
    public function agregarNota($nota){
        if($nota>= 1 && $nota <=10){
            $this->notas[] = $nota;
        }
    }

    // TODO: Crear un método calcularPromedio() que devuelva el promedio de notas
    //       CUIDADO: ¿qué pasa si no hay notas todavía?
    public function calcularPromedio(){
        $totalSuma=0;
        $cantidadNotas=0;
        foreach($this->notas as $nota){
            $totalSuma+=$nota;
            $cantidadNotas++;
        }
        return $totalSuma/$cantidadNotas;
    }
    
}


