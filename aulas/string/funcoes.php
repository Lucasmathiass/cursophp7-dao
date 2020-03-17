<?php
//maiuscula
/*$nome = "lucas emanuel";

echo strtoupper($nome);

echo "<br>";
//minuscula
$pessoa = "RAFAEL FERNANDES";

echo strtolower($pessoa);

echo "<br>";
//maiuscla em cada palavra 
$pessoa2 = "lucas fernandes";

echo ucwords($pessoa2);

echo "<br>";
$var = "Lucas";

echo str_replace("c", "C", $var);


$frase = "Lorem Ipsum";
// conta com espaço entre as palavras
$r =strpos($frase, "Ipsum");
echo $r;

//palavras antes da escolhida 
echo "<br>";
echo substr($frase, 0, $r);
*/
// testes
$nome = "lucas";
$frase = "como sair desse labirinto?";

echo $query = strpos($frase, "desse");
echo substr($frase, 0, $query);
echo "<br>";
//quatidade de letras em string
$palavra = strlen("desse");
echo substr($frase, $query + $palavra, strlen($frase));

echo "<hr>";
echo str_replace("sair", "entrar", $frase);

