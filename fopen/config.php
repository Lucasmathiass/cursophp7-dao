<?php
spl_autoload_register(function($classe){
   $file = "class".DIRECTORY_SEPARATOR.$classe.".php";
    if(file_exists($file)){
        require_once($file);
    }
    
});

