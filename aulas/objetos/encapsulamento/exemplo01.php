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
 class Programador extends Pessoa {

 }



$objeto = new Programador();

echo $objeto -> nome = "Rasmus";
?>