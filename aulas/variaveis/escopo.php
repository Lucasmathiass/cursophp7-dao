<?php
//escopo global dento do arquivo
$nome = "Lucas";

echo $nome;


//escopo local dentro da funcão, pois só sera chamada dentro da funcão
function nome(){
	echo "Rodrigo";
}

nome();



// transformando variavel local em global

$pessoa = "Lilian";

function pessoa (){
	global $pessoa;
	echo $pessoa;
}

pessoa();