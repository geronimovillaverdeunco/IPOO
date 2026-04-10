<?php 
/*Implementar una clase Disquera con los atributos: hora_desde y hora_hasta (que indican el horario de atención de la tienda), estado (abierta o cerrada), dirección y dueño.
El atributo dueño debe referenciar a un objeto d la clase Persona implementada enel punto1. 
Defina en la clase los siguientes métodos:
a) Método constructor _ _construct () que recibe como parámetros los valores iniciales para los atributos de la clase.
b) Los métodos de acceso de cada uno de los atributos de la clase.
c) dentroHorarioAtencion($hora,$minutos): que dada una hora y minutos retorna true si la tienda debe encontrarse abierta en ese horario y false en caso contrario.
d) abrirDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra dentro del horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura.
e) cerrarDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra fuera del horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre.
f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
g) Crear un script Test_Disquera que cree un objeto Disquera e invoque a cada uno de los métodos implementados. */
class Disquera{
    private $hora_desde; //horario de apertura
    private $hora_hasta; //horario de cierre de la tienda
    private $estado; //(abierta o cerrada)
    private $direccion;
    private $dueno; //referencia a un obj de la clase Persona
    public function __construct($horaAper, $horaClausura, $elEstado, $laDirecc, $elDueno){
        $this->hora_desde = $horaAper;
        $this->hora_hasta = $horaClausura;
        $this->estado = $elEstado;
        $this->direccion = $laDirecc;
        $this->dueno = $elDueno;
    }
    public function getHoraApertura(){
        return $this->hora_desde;
    }
    public function getHoraClausura(){
        return $this->hora_hasta;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getDueno(){
        return $this->dueno;
    }
    public function setHoraApertura($laHoraAper){
        $this->hora_desde = $laHoraAper;
    }
    public function setHoraClausura($laHoraClau){
        $this->hora_hasta = $laHoraClau;
    }
    public function setEstado($elEstado){
        $this->estado = $elEstado;
    }
    public function setDireccion($laDirec){
        $this->direccion = $laDirec;
    }
    public function setDueno($elDueno){
        $this->dueno = $elDueno;
    }

    //TO STRING
    public function __toString(){
        return "Hora Apertura: " . $this->getHoraApertura() . 
               ", Hola Clausura: " . $this->getHoraClausura() . 
               ", Estado: " . $this->getEstado() . 
               ", Direccion: " . $this->getDireccion() . 
               ", Dueno: " . $this->getDueno() ;
    }
}