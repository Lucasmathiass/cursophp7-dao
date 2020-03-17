<?php 

function salario (){
    return 998.00;
}

echo "João recebeu 3 salarios ". salario()*3;


// argumentos 

/*function saudacao($usuario, $saudacao  ='Ola'){
    return $saudacao.$usuario;
}
echo "<br>";
echo saudacao('Lucas', $saudacao);
*/

//recuperacao de argumentos como array
echo "<hr>";

function dados($nome, $idade){

    $args =  func_get_args(1);
    return $args;
}
if(func_get_args() == 2){
    echo 1;
}