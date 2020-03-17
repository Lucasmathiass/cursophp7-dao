<?php

class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this -> modelo;

    }
    public function setModelo($modelo){
         $this -> modelo = $modelo;
    }

    public function getMotor(){
        return $this -> motor;
    }
    public function setMotor($motor){
        $this-> motor = $motor;
    }

    public function getAno():int{
        return $this ->ano;
    }

    public function setAno($ano){
        $this -> ano = $ano;
    }
    public function exibeCarro(){
        return array(
            "modelo " => $this -> getModelo(),
            "motor" => $this -> getMotor(),
            "ano" => $this -> getAno()

        );
    }
}

$veiculo =  new Carro();


$veiculo -> setModelo("Monster");
echo $veiculo ->getModelo();
echo "<hr>";
$veiculo -> setModelo("Civic");

$veiculo -> setAno(2001);

$veiculo -> setMotor("vb56");

print_r($veiculo -> exibeCarro());