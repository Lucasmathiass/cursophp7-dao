<?php
spl_autoload_register(function($classe){
    if(file_exists("../abstrata". DIRECTORY_SEPARATOR. $classe.".php") == true){
        require_once("../abstrata".DIRECTORY_SEPARATOR. $classe.".php");
    }
});


$carro = new Civic();

$carro -> acelerar("55");
?>

