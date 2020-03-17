<?php

class Pessoa {
    public $nome;

    public function Falar (){
        return "Meu nome é ". $this -> nome;
    }
}

$lucas = new Pessoa();
$lucas -> nome = "Lucas";

echo "<br>";

echo $lucas -> Falar();