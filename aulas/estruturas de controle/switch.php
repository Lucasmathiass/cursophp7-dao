<?php
date_default_timezone_set('America/Fortaleza');
echo $diaSemana = date('w');

echo "<br>";
switch($diaSemana){
	case 2:
	 echo "Hoje não é dia terça feira";
	 break;
	case 1: 
		echo "Hoje é Segnda feira";
		break;
	case 3:
	 echo "Hoje não é defFia terça feira";
	 break;

	 default:
	 	echo "Digite um valor válido";
	 	
	 

}


echo "<hr>";

