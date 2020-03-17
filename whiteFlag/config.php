<?php
spl_autoload_register(function($classe){
   echo $file = "classes".DIRECTORY_SEPARATOR.$classe.".php";
    if(file_exists($file)){
        require_once($file);
    }
    
});

