<?php 

class Vagon{


/*En la clase Vagón:
✔
Se registra la siguiente información: año de instalación, largo, ancho, peso, cantidad máxima de pasajeros que puede transportar y la cantidad de pasajeros que está transportando. Es importante tener en cuenta que la variable de instancia que representa el peso del vagón se calcula de acuerdo a la cantidad de pasajeros que se está transportando y considerando un peso promedio por pasajero de 80kg.*/  
    private $anioInstalacion;
    private $largo;
    private $ancho;
    private $peso; // se calcula de acuerdo a la cantidad de pasajeros que se está transportando y considerando un peso promedio por pasajero de 80kg
    private $cantidadMaximaPasajeros;
    private $cantidadActualPasajeros; //cada pasajero se calcula que pesa unos 80kg 

/*✔
Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase.*/ 

    public function __construct($anio, $largo, $ancho, $cantMaxPasaj, $cantActualPasaj ) {
       $this->anioInstalacion = $anio;
       $this->largo = $largo;
       $this->ancho = $ancho;
       $this->cantidadMaximaPasajeros = $cantMaxPasaj;
       $this->cantidadActualPasajeros = $cantActualPasaj;
       $this->peso = $cantActualPasaj*80;
    }
    
/*
✔  
Los métodos de acceso para cada una de las variables instancias de la clase.*/
    public function getAnioInstalacion(){
        return $this->anioInstalacion;
    }
    public function getLargo(){
        return $this->largo;
    }
    public function getAncho(){
        return $this->ancho;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getCantidadMaximaPasajeros(){
        return $this->cantidadMaximaPasajeros;
    }
    public function getCantidadActualPasajeros(){
        return $this->cantidadActualPasajeros;
    }
    public function setCantidadActualPasajeros($cantPasajeros){
        $this->cantidadActualPasajeros = $cantPasajeros;
    }

/*
✔
Redefinir el método toString para que retorne la información de los atributos de la clase.*/ 
    public function __toString(){
        $cadena = "Año de instalacion: " . $this->getAnioInstalacion() . "\n" . 
                "Largo del vagon: " . $this->getLargo() . "\n" . 
                 "Ancho del vagon: " . $this->getAncho() . "\n"  . 
                  "Peso del vagon: " . $this->getPeso() . "\n" . 
                  "Cantidad Max Pasajeros: " . $this->getCantidadMaximaPasajeros() . "\n" . 
                  "Cantidad Actual pasajeros: " .$this->getCantidadActualPasajeros()."\n";
        return $cadena;
    }

/*
✔
Implementar el método incorporarPasajeroVagon que recibe por parámetro la cantidad de pasajeros que ingresan al vagón y tiene la responsabilidad de actualizar las variables instancias que representan el peso y la cantidad actual de pasajeros, siempre y cuando se permita de acuerdo a la capacidad máxima de pasajeros. El método deberá devolver true o false. */
    public function incorporarPasajeroVagon($cantPasajeros){
        $exito = false;
        if($cantPasajeros < ($this->getCantidadMaximaPasajeros()-$this->getCantidadActualPasajeros()) 
            && $cantPasajeros>0){
            $this->setCantidadActualPasajeros($cantPasajeros);
            $exito = true;
        }else{
            $exito = false;
        }
        return $exito;
    }
}