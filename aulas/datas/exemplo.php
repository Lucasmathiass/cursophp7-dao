<?php
$gravidez = new DateTime($dt = '26-01-2020');
$gravidez -> format("d-m-y");

echo "Inicio de atraso ".$dt;

echo "<br>";

$periodo = new DateInterval("P15D");




echo "Data limite para confirmação de gravidez". $periodo ;

if($gravidez > $aguardo ){
    echo "Esta Gravida";
}
