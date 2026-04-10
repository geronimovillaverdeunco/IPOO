<?php
// =======================
// Programa Principal
// =======================
include_once 'Alumno.php';
include_once 'Materia.php';
// 1) Crear un Alumno "Lisa Simpson"

$lisa = new Alumno("Lisa", "Simpson");
// 2) Crear dos materias: "Matemática" y "Música"
$matematica = new Materia("Matematica");      //Completar
$musica = new Materia("Musica");        //Completar

// 3) Agregar algunas notas a cada materia. Modificar las sentencias siguientes
//      si la nota no se pudo agregar
$matematica->agregarNota(10);
$matematica->agregarNota(9);
$matematica->agregarNota(11); // deberia dar ERROR: nota fuera de rango
$matematica->agregarNota(20); // deberia dar ERROR: nota fuera de rango
                              

$musica->agregarNota(8);
$musica->agregarNota(7);

// 4) Asignar las materias al alumno 
$lisa->agregarMateria($matematica);
$lisa->agregarMateria($musica);

// 5) Mostrar los datos de Lisa y el promedio general
$lisa->mostrarDatos();
$lisa->calcularPromedioGeneral();

// 6) Mostrar las materias y calcular el promedio general
$lisa->mostrarMaterias();
