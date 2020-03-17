<?php


interface Cartao{
    
    public function Autorizar();
}


class Visa implements Cartao{
    public $bandeira;
    public function Autorizar(){
        echo "Pagamento com ".  $this ->bandeira. " autorizado.";
    }
}


$pagamento = new Visa();

$pagamento -> bandeira = "Visa";

$pagamento -> Autorizar();