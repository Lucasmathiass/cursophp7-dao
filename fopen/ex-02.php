<?php
require_once("config.php");
$select = new Sql();
$resultado = $select -> select("SELECT * FROM usuarios ORDER BY :ASC", array(":ASC" => "ASC"));


$headers = array();

$resource = fopen("arquivo.txt", "w+");

foreach ($resultado[0] as $header => $value) {
	array_push($headers, ucfirst($header));
	

}
//fwrite fica fora pois so precisamos utilizar o linha somente uma vez
fwrite($resource, implode(",", $headers)."\n \r");
foreach ($resultado as $row) {
	$body = array();
	foreach ($row as $key => $value) {
		array_push($body, $value);
	}
	//o fwrite ficara dentro pois existem mais de um registro
	fwrite($resource, implode(",", $body). "\n \r");
}




fclose($resource);