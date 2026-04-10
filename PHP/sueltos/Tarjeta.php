<?php

class Tarjeta{
    private $codigo;
    private $titular;

    public function __construct($cod , $tit)
    {
        $this->codigo = $cod;
        $this->titular = $tit;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getTitular(){
        return $this->titular;
    }

    public function __toString()
    {
        return "Codigo :" . $this->getCodigo() . ", Titular: " . $this->getTitular();
    }
}
