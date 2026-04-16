<?php

class Argentino extends Persona{
    private $clubHincha;
    public function __construct($nom, $ape, $club){
         parent::__construct($nom, $ape);
         $this->clubHincha = $club;
    }
   
    
}