
<?php

abstract class Modelo {
    public function oi(){
        echo "oi";
    }
}


class Ricardo extends Modelo{
    public $nome;
    public function nome ($e){
        $this -> nome = $e. "<br>";
        return $this -> nome;
    }
    
}


$d = new Ricardo();
echo $d -> nome("Ricardo");
$d -> oi();