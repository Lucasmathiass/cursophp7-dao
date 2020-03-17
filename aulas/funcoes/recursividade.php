<?php

function fatorial($arg){
    if($arg <= 1){
        $arg = $arg;
    }else{
        $arg *= fatorial($arg -1);
    }
    return $arg;
}

echo fatorial(5);