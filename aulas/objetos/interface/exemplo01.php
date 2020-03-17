<?php
interface veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}




class Civic implements veiculo{
    public function acelerar($velocidade){
        echo "A velocidade é ". $velocidade. "Km/h.". "<br>";
    }
    public function frenar($velocidade){
        echo "Frenou a ". $velocidade. "km/h". "<br>";
    }

    public function trocarMarcha($marcha){
        echo "Trocou de marcha [$marcha]";
    }
}
$carro = new Civic();

$carro -> acelerar(56);

$carro-> frenar(20);

$carro -> trocarMarcha(3);