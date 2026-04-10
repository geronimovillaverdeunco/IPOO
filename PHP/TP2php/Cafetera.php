<?php


// 1)
// Desarrollar una clase Cafetera con los atributos capacidadMaxima (la cantidad máxima de café que puede contener la cafetera) y cantidadActual (la cantidad actual de café que hay en la cafetera).
class Cafetera{
    private $capacidadMaxima;  
    private $capacidadActual;
    

// a.
// Implementar los siguientes métodos:
// •
// Método constructor __construct() que recibe como parámetros los valores iniciales para los atributos de la clase.
public function __construct($capMax, $capActual){
    $this->capacidadMaxima = $capMax;
    $this->capacidadActual = $capActual;
}
// •
// Los métodos de acceso de cada uno de los atributos de la clase.
public function getCapacidadMaxima(){
    return $this->capacidadMaxima;
}
public function getCapacidadActual(){
    return $this->capacidadActual;
}
public function setCapacidadMaxima($capMaxima){
    $this->capacidadMaxima = $capMaxima;
}
public function setCapacidadActual($capActual){
    $this->capacidadActual = $capActual;
}

// •
// llenarCafetera(): la cantidad actual debe ser igual a la capacidad de la cafetera.
public function llenarCafetera(){
    $this->setCapacidadActual($this->getCapacidadMaxima());
}
// •
// servirTaza($cantidad): simula la acción de servir una taza con la capacidad indicada.
// Si la cantidad actual de café no alcanza para llenar la taza, se sirve lo que quede y se devuelve algún valor que indique que no se pudo completar correctamente la acción.
public function servirTaza($cantidad){
    if($cantidad  <=  $this->getCapacidadActual()   ){
        $this->setCapacidadActual(($this->getCapacidadActual()   -  $cantidad));
        $msj = "TAza servida correctamente";
    }else{
        $this->setCapacidadActual(0);
        $msj = "Se sirvio todo el cafe que quedaba. No alcanzo para la cantidad deseada";
    }
    return $msj;
}


// •
// vaciarCafetera(): pone la cantidad de café actual en cero.
public function vaciarCafetera(){
    $this->setCapacidadActual(0);
}
// •
// agregarCafe($cantidad): añade a la cafetera la cantidad de café indicada.
public function agregarCafe($cantidad){
    if(($this->getCapacidadActual() + $cantidad )< $this->getCapacidadMaxima()) {
        $this->setCapacidadActual($this->capacidadActual + $cantidad);
    }
}



// •
// Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
public function __toString(){
    $cadena = "Capacidad actual: " . $this->getCapacidadActual() . 
            ", Capacidad Maxima: " . $this->getCapacidadMaxima();
    return $cadena;
}


// b.
// Crear un script Test_Cafetera que cree un objeto Cafetera e invoque a cada uno de los
// métodos implementados probando diferentes escenarios.
}

$caf = new Cafetera(500, 260);

echo "CAP ACTUAL: " . $caf->getCapacidadActual() . "\n";
echo "CAP MAX" . $caf -> getCapacidadMaxima() . "\n";
$caf->setCapacidadActual(480);
echo "CAP ACTUAL " .$caf->getCapacidadActual() . "\n";

$caf->llenarCafetera();
echo "CAP ACTUAL llena " .  $caf->getCapacidadActual() . "\n";
//$caf->vaciarCafetera();
//echo "CAP ACTUAL" .  $caf->getCapacidadActual() . "\n";

$caf->servirTaza(200);
echo "CAP ACTUAL " .  $caf->getCapacidadActual() . "\n";
$caf->servirTaza(15);
$caf->servirTaza(25);
echo $caf->servirTaza(100);

echo "CAP ACTUAL " .  $caf->getCapacidadActual() . "\n";

$caf->agregarCafe(111);
echo "CAP ACTUAL " .  $caf->getCapacidadActual() . "\n";

echo $caf;

$caf->setCapacidadMaxima(15000);

echo $caf;


