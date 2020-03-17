<?php
echo date('h:i:s', 1579868382);

echo time();


echo "<hr>";


$var = strtotime("2000-09-11");

echo date("Y-m-d", $var);



echo "<hr>";


date_default_timezone_set('America/Fortaleza');

setlocale(LC_ALL, "pt_BR", "pt_BR.UTF-8", "portuguese");

echo date('Y-M-d - h:i:s');

echo "<br>";
echo date('F');

echo "<br>";
echo strftime("%Y %m %d");