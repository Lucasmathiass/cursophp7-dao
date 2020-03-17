<?php
// ESTE COMANDO IRA VERIFICAR SE O DIRETORIO QUE ESTA NA VARAVEL EXISTE, SENAO CRIARA UM
$file = "images";
if(!is_dir($file)){
    mkdir($file);
}else{
    $es = scandir($file);
    foreach($es as $arquivo){
        $filename = "images".DIRECTORY_SEPARATOR. $arquivo;
        
    }
    
    
}