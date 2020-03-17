<?php

class Endereco {
    private $lograduro;
    private $numero;

   public function __construct($a, $b){
    $this -> logradouro = $a;
    $this -> numero = $b;
   }

   public function __toString(){
       return $this -> logradouro. " ,". $this -> numero.".";
   }

}

$ed = new Endereco("Alexandre Silva", 122);




echo $ed;