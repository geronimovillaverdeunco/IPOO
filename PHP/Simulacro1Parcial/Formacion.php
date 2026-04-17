<?php
class Formacion
{
    private $locomotora;
    private $vagones = [];
    /*/*En la clase Formacion (se entrega a medio completar):
✔
Se almacena la referencia a un objeto de la clase Locomotora y la colección de objetos de la clase Vagón.
✔
Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase. */
    public function __construct($locomotora, $vagones = [])
    {
        $this->locomotora = $locomotora;
        $this->vagones = $vagones;
    }
    /*✔
Los métodos de acceso de cada uno de los atributos de la clase. */
    public function getLocomotora()
    {
        return $this->locomotora;
    }
    public function getVagones()
    {
        return $this->vagones;
    }
    /* */
    public function __toString()
    { {
            $cadena = "Locomotora: " . $this->getLocomotora() . "\n" .
                "Vagones: " . $this->getVagones() . "\n";
        }
    }
    public function agregarVagon($vagon)
    {
        $this->vagones[] = $vagon;
    }
    /*✔
Implementar el método incorporarPasajeroFormacion que recibe la cantidad de pasajeros que se desea incorporar a la formación y busca dentro de la colección de vagones aquel vagón capaz de incorpora esa cantidad de pasajeros. Si no hay ningún vagón en la formación que pueda ingresar la cantidad de pasajeros, el método debe retornar un valor falso y verdadero en caso contrario. */
    public function incorporarPasajeroFormacion($cantPasajeros) {
        $vagones = $this->getVagones();
        $exito = false;
        foreach ($vagones as $vagoncito) {
            if($vagoncito->getCantidadMaximaPasajeros() < $cantPasajeros){
                $exito=true;
            }
        }
        return $exito;
    }
    /*

✔
Implementar el método cantidadPasajerosFormacion el cual recorre la colección de vagones y retorna la cantidad de pasajeros que se encuentran en la formación. */
    public function cantidadPasajerosFormacion(){
        $coleccionVagones = $this->getVagones();
        $cantPasajerosFormacion = 0;
        foreach ($coleccionVagones as $vagoncito) {
            $cantPasajerosFormacion+= $vagoncito->getCantidadActualPasajeros();
        }
        return $cantPasajerosFormacion;
    }
}
