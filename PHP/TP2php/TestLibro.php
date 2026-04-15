<?php
include_once("Libro.php");


/*
b.
Crear un script TestLibro que:
•
Cree un arreglo con 6 libros*/
$libro1 = new Libro(1234, "Lord of the rings", 2001, "Planeta", "JRR", "Tolkien");
$libro2 = new Libro(1333, "Harry Potter", 2003, "De Bolsillo", "JK", "Rowlin");
$libro3 = new Libro(1444, "Bajo la misma estrella", 2011, "Unicornio", "Peter", "Wood");
$libro4 = new Libro(1823, "Sapiens", 2015, "Planeta", "Yuval", "Nohari");
$libro5 = new Libro(3144, "Winning Ugly", 1974, "Importados", "Brad", "Gilbert");
$libro6 = new Libro(1441, "Tennis Mental", 1980, "De Bolsillo", "Tim", "Galloway");

$libro8 = new Libro(5113, "Argentina", 2022, "Camperones", "JAvier", "Lopez");

$libros = [$libro1, $libro2, $libro3, $libro4, $libro5, $libro6];

/*
•
Defina el método iguales($libro,$arreglo): dada una colección de libros, indica si el libro pasado por parámetro ya se encuentra en dicha colección.*/ 

 function iguales($libro, $arreglo) {
        $existe = false;
        $i = 0;
        $cantidad = count($arreglo);

        // Usamos un while para que, si lo encuentra, deje de buscar (más eficiente)
        while ($i < $cantidad && !$existe) {
            // Comparamos el ISBN del libro que recibimos con el del libro en la posición $i
            if ($arreglo[$i]->getISBN() == $libro->getISBN()) {
                $existe = true;
            }
            $i++;
        }

        return $existe;
    
    }

    if(iguales($libro8, $libros)){
        echo "El libro ya se encuentra en la coleccion";
    }else{
        echo "El libro No se encuentra";
    }
/*
•
defina el método librodeEditoriales($arreglolibros, $editorial): método que retorna un arreglo asociativo con todos los libros publicados por la editorial dada.*/
function libroDeEditoriales($arregloLibros, $editorial){
    $resultado = [];
    foreach($arregloLibros as $libro){
        if($libro->getEditorial()==$editorial){
            $resultado[] = $libro;
        }
    }
    return $resultado;
}
$arrayEdit = libroDeEditoriales($libros, "Planeta");
var_dump($arrayEdit);


/*•
cree al menos tres objetos libros e invoque a cada uno de los métodos implementados en la clase Libro y luego ejecute los métodos creados en este script. */