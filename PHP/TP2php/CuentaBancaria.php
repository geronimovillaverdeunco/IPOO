<?php 
/*
2)
Crear una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el saldo actual y el interés anual que se aplica a la cuenta.
*/
class CuentaBancaria{
    private $numeroCuenta;
    //private $dniCliente; LO HAGO UNA REFERENCIA A UNA CLASE PERSONA
    private $cliente;
    private $saldoActual;
    private $interesAnual;
    /*
c.
Realizar las modificaciones necesarias en la clase CuentaBancaria (Ejercicio 2) para que en vez de contener como atributo el DNI del dueño de la cuenta tenga una referencia a las clase Persona. */

/*a.
Definir en la clase los siguientes métodos:
•
Método constructor __construct() que recibe como parámetros los valores iniciales para los atributos de la clase.*/
    public function __construct($numCuen , $cli, $saldoAct, $intAnual){
        $this->numeroCuenta = $numCuen;
        $this->cliente = $cli;
        $this->saldoActual = $saldoAct;
        $this->interesAnual = $intAnual;
    }

/*
•
Los métodos de acceso de cada uno de los atributos de la clase.*/
    public function getNumeroCuenta(){
        return $this->numeroCuenta;
    }
    public function getDatosCliente(){
        return $this->cliente;
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
    // public function setDniCliente($elDni){
    //     $this->dniCliente = $elDni;
    // }
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
•*/
    public function depositar($cant){
        $this->setSaldoActual($this->getSaldoActual()+$cant);
    }
/*
retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
VALIDAR QUE NO RETIRE DE MAS
•*/ 
    public function retirar($cant){
        $saldoActual = $this->getSaldoActual();
        $this->setSaldoActual($saldoActual-$cant);
    }
/*
Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.*/
    public function __toString(){
        $cadena = "Numero de Cuenta: " . $this->getNumeroCuenta() . "\n" .
                  "DNI Cliente: " . $this->cliente->getNumeroDocumento() . " \n"  .
                    "Saldo Actual: " . $this->getSaldoActual() ;
         return $cadena;           
    }
}

