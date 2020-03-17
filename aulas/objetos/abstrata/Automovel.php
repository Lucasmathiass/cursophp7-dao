<?php

interface veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}


abstract class Automovel implements veiculo{
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



?>