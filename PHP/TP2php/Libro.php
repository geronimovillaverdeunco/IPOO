<?php
/*4)
Creas una clase Libro que tenga los atributos ISBN, titulo, año de edición, editorial, nombre y apellido del autor.*/ 
class Libro{
    private $ISBN;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $nombreAutor;
    private $apellidoAutor;

/*a.
Definir en la clase los siguientes métodos
•
Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la clase.
•*/
    public function __construct($isbn, $tit, $anio, $edit, $nomAut, $apeAut){
        $this->ISBN = $isbn;
        $this->titulo = $tit;
        $this->anioEdicion = $anio;
        $this->editorial = $edit;
        $this->nombreAutor = $nomAut;
        $this->apellidoAutor = $apeAut;
    }
/*
Los métodos de acceso de cada uno de los atributos de la clase.
•*/
    public function getISBN(){
        return $this->ISBN;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAnioEdicion(){
        return $this->anioEdicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }

/*
Método toString() que retorne la información de los atributos de la clase.*/
    public function __toString(){
        $cadena = "ISBN: " . $this->getISBN() . "\n" ;
        $cadena.= "Titulo: " . $this->getTitulo() . "\n" ;
        $cadena.= "Año de Edicion: " . $this->getAnioEdicion() . "\n" ;
        $cadena.= "Editorial: " . $this->getEditorial() . "\n" ;
        return $cadena;
    }
/*
•
perteneceEditorial($editorial): indica si el libro pertenece a una editorial dada. Recibe como parámetro una editorial y devuelve un valor verdadero/falso.*/
    public function perteneceEditorial($editorial){
        return $this->getEditorial()==$editorial;
    }
/*
•
aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado.*/
    public function aniosDesdeEdicion(){
        return date("Y")-$this->getAnioEdicion();
    }

}