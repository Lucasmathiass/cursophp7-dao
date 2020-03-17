<?php
class Animal {
    public function falar(){
        return 'som';
    }
    public function mover(){
        return "andar";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Latir";
    }

}

class Gato extends Animal{
    public function falar(){
        return "Miar";
    }
}


class Passaro extends Animal{
    public function falar(){
        return "Piar";
    }

    public function mover(){
        return "Voa e ". parent::mover(); 
    }
}

/* Instancias */
$objeto = new Cachorro();

echo $objeto -> falar(). "<br>";  
echo $objeto -> mover();


echo "<br>";
$gato = new Gato;
echo "-------------------<br>";
echo $gato -> falar(). "<br>";


echo $gato -> mover();

echo "<br>";

echo "-------------------<br>";

$passaro = new Passaro();

echo $passaro -> falar(). "<br>";


echo $passaro -> mover();