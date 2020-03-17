<?php
spl_autoload_register(function($classe){
    $fileName = $classe.".php";
    if(file_exists($fileName)){
        require_once($fileName);
    }
});