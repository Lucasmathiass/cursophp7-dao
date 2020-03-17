<?php

class Pessoa {
    public $nome = "Rasmus Lerdof";
    protected $idade = 45;
    private $senha = "123456";

    public function exibirDados(){
        echo $this -> nome."<br>";
        echo $this -> idade."<br>";
        echo $this -> senha;
    }

}




$objeto = new Pessoa();
$objeto -> exibirDados();
?>