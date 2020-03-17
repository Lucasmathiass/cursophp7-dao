<?php 

define("NOME", "Lucas");
echo NOME;

//php 7
define("CONEXAO", [
	'127.168.0.1',
	'root',
	'password'

], true);

print_r(conexao[0]);

echo "<br>";

echo PHP_VERSION;