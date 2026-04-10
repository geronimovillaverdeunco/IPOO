<?php 
/*
2)
Crear una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el saldo actual y el interés anual que se aplica a la cuenta.
*/
class CuentaBancaria{
    private $numeroCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;

/*a.
Definir en la clase los siguientes métodos:
•
Método constructor __construct() que recibe como parámetros los valores iniciales para los atributos de la clase.*/
    public function __construct($numCuen , $dniCli, $saldoAct, $intAnual){
        $this->numeroCuenta = $numCuen;
        $this->dniCliente = $dniCli;
        $this->saldoActual = $saldoAct;
        $this->interesAnual = $intAnual;
    }

/*
•
Los métodos de acceso de cada uno de los atributos de la clase.*/
    public function getNumeroCuenta(){
        return $this->numeroCuenta;
    }
    public function getDNICliente(){
        return $this->dniCliente;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }
    public function setNumeroCuenta($numCta){
        $this->numeroCuenta =$numCta;
    }
    public function setDniCliente($elDni){
        $this->dniCliente = $elDni;
    }
    public function setSaldoActual($elSaldo){
        $this->saldoActual = $elSaldo;
    }
/*•
actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual dividido entre 365 aplicado al saldo actual).*/
    public function actualizarSaldo(){
        $interesDiario = $this->getInteresAnual() / 365;
        $interesGenerado = $this->getSaldoActual() * $interesDiario;
        $this->saldoActual += $interesGenerado;
    }
/*
•
depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.
•
retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
•
Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
b.
Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada uno de los métodos implementados.


*/
}