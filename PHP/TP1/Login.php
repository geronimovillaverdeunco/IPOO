<?php

/*Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite recordar la contraseña ingresada y las ultimas 4 contraseñas utilizadas. Implementar un método que permita validar una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es decir no se encuentra dentro de las cuatro almacenadas). Implementar el método recordar que dado el usuario, muestra la frase que permite recordar su contraseña.*/ 

class Login{
    private $nombreUsuario;
    private $contrasena;
    private $fraseContrasena;
    private $ultimasContrasenas = [];
    //CONSTRUCTOR
    public function __construct($usuario, $clave, $frase){
        $this->nombreUsuario = $usuario;
        $this->contrasena = $clave;
        $this->fraseContrasena = $frase;
        $this->ultimasContrasenas [] = $clave;
    }
    //GETTERS o OBSERVADORES
    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }
    public function getContrasena(){
        return $this->contrasena;
    }
    public function getFrase(){
        return $this->fraseContrasena;
    }
    public function getUltimasContrasenas(){
        return $this->ultimasContrasenas;
    }
    //SETTERS O MODIFICADORES
    public function setNombreUsuario($nuevoNombreUsuario){
        $this->nombreUsuario = $nuevoNombreUsuario;
    }
    public function setFrase($nuevaFrase){
        $this->fraseContrasena = $nuevaFrase;
    }
    //Implementar un método que permita validar una contraseña con la almacenada
    public function validarContrasena($clave){
        if($clave == $this->getContrasena()){
            $msj = "Contrasena validada!!";
        }else{
            $msj = "Contrasena NO valida";
        }
        return $msj;
    }
    /*y un método para cambiar la contraseña actual por otra nueva, el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es decir no se encuentra dentro de las cuatro almacenadas) */
    public function cambiarContrasena($nuevaContra){
        if(in_array($nuevaContra, $this->ultimasContrasenas)){
            echo "La contrasena ya ha sido utilizada";
        }else{
            $this->contrasena = $nuevaContra;
            $this->ultimasContrasenas[]=$nuevaContra;
        }
    }

    public function __toString()
    {
        return "HOLAAA DESDE TOSTRIJG";
    }
}