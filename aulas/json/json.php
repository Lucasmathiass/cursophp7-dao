<?php

$nota = array();

array_push($nota, array(
	'nome' => 'Lucas Emnuel',
	'idade' => 21,
	'ano' => 2017,
	'media' => 720

));
array_push($nota, array(
	'nome' => 'Lucas Emanuel',
	'idade' => 22,
	'ano' => 2018, 
	'media' =>668
 

));
print_r($nota[1]);
print_r($nota[0]);

echo json_encode($nota);


$json = '[{"nome":"Lucas Emnuel","idade":21,"ano":2017,"media":720},{"nome":"Lucas Emanuel","idade":22,"ano":2018,"media":668}]';

$conv = json_decode($json, true);
var_dump($conv);