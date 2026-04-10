<?php
/*14. Crea una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el
saldo actual y el interés anual que se aplica a la cuenta. Define en la clase los siguientes métodos:
14.a. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
14.b. Los método de acceso de cada uno de los atributos de la clase.
14.c. actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual dividido entre 365 aplicado al saldo actual).
14.d. depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.
14.e. retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
14.f. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
14.g. Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada
uno de los métodos implementados. */
class CuentaBancaria{
    private $nroCuenta;
    private $persona;
    private $saldoActual;
    private $interesAnual;
    public function __construct($elNroCuenta, $persona, $elSaldo, $elInteres){
        $this->nroCuenta = $elNroCuenta;
        $this->persona = $persona;
        $this->saldoActual = $elSaldo;
        $this->interesAnual = $elInteres;
    }
    public function getNroCuenta(){
        return $this->nroCuenta;
    }
    public function getDniCliente(){
        return $this->persona->getDni();
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }
    public function setNroCuenta($elNumero){
        $this->nroCuenta = $elNumero;
    }
    public function setDniCliente($elDni){
        $this->persona->setDocumento = $elDni;
    }
    public function setSaldoActual($elSaldo){
        $this->saldoActual = $elSaldo;
    }
    public function setInteresAnual($elInteres){
        $this->interesAnual = $elInteres;
    }
    //14.c. actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual dividido entre 365 aplicado al saldo actual).
    public function actualizarSaldo(){
        $saldo = $this->saldoActual;
        $interesDiario= $saldo * ($this->interesAnual/100) / 365;
        $this->saldoActual = round($saldo+$interesDiario, 2);
    }
    //14.d. depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.
    public function depositar($cantidad){
        $this->saldoActual += $cantidad;
    }
    //14.e. retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
    public function retirar($cant){
        if($this->saldoActual < $cant){
            $mensaje = "Saldo INSUFICIENTE";
        }else{
            $this->saldoActual-=$cant;
            $mensaje = "Saldo ACTUALIAZO CON EXITO";
        }
        return $mensaje;
    }
}