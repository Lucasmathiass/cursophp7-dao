<?php
setLocale(LC_ALL, "pt_BR", "pt_BR.UTF-8", "portuguese");
$hora = new DateTime("now");

$intervalo = new DateTime('2020/03/22');

$interval = $hora ->diff($intervalo);
echo $int = $interval -> format("%D dias para pagamento");
if($intervalo < $hora){
    echo "O prozo ";
}