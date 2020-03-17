<?php
class Documento {
    private $numero;
    private $nome;

    public function __construct($a){
        $this -> numero = $a;
        $this -> nome = $b;

    }

    public function exibirDados(){
    return $this -> nome;
    return $this -> numero;
    }

    
}



$objeto = new Documento("12421802490");
var_dump( $objeto -> exibirDados());