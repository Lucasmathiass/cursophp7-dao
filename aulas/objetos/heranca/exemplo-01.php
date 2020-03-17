<?php
class Documento{
    //generica
    private $numero;
    public function getNumero(){
        return $this -> numero;
    }
    
    public function setNumero($numero){
        $this -> numero = $numero;
    }

}

class Cpf extends Documento{
    public function validacao():bool{
        return true;
    }
}

$doc = new Cpf();

$doc -> setNumero("12421802490");
echo $doc -> validacao();
echo $doc -> getNumero();

var_dump($doc);