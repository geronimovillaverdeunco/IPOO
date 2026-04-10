<?php 

class Alumno{

    private $nombre;
    private $documento;
    private $direccion;

    public function __construct($elNombre, $elDocumento, $laDireccion)
    {
        $this->nombre = $elNombre;
        $this->documento = $elDocumento;
        $this->direccion = $laDireccion;
    }

    public function getNombre():string{
        return $this->nombre;
    }
    public function getDocumento():int{
        return $this->documento;
    }
    public function getDireccion():string{
        return $this->direccion;
    }
    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function setDocumento($nuevoDocumento){
        $this->documento = $nuevoDocumento;
    }
    public function setDireccion($nuevaDireccion){
        $this->direccion = $nuevaDireccion;
    }
    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . " , Documento: " . $this->getDocumento() .
        " , Direccion: " . $this->getDireccion();

    }
}