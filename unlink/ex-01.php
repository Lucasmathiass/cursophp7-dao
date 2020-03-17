<?php 

$resource = fopen("teste.txt","w+");

fclose($resource);
//inserir nome do arquivo, pois n queremos apagar a variavel
unlink("teste.txt");
 ?>