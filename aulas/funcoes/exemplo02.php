<?php
function soma (float ...$valores){
    return array_sum($valores);
}

echo soma(12.7, 9.8);


// parâmetros padrão em funcoes


function args($nome, $coffe = "Capuccino"){
    return "Seu nome é $nome, certo? Ainda toma $coffe?";

}

echo args("Lucas");




//função passando pprâmetros por referencia
echo "<hr>";
$valor = 10;
function trocaValor(&$valor){
    return $valor+=2;
}
echo trocaValor($valor);