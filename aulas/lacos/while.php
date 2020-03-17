<?php
	/*$condicao = true;

	while($condicao){
		$sorteio = rand(1,10);
echo $sorteio. " ";
	if($sorteio ==3){
		$condicao = false;
		echo " Três";
	}

	}
	*/
// desconto

$compra = 100;
$desconto = 10 / 100;
do{
 echo $compra - ($desconto * $compra); 
 
}while($compra > 1000);