<?php
$filename = "usuario.csv";

if(file_exists($filename)){
	$file = fopen($filename, "r");

	$headers = explode(",", fgets($file));
	while($row = fgets($file)){
		$conteudo = explode(",",fgets($row));
	}
}

fclose($file);



























/*$filename = "usuario.csv";

if(file_exists($filename)){
	$file = fopen($filename, "r");
	// a rimeira linha saemos que e o cabecaclho resta mostrar da segunda linha em diante que ossuio conteudo
	$headers = explode(",", fgets($file));
	$data = array();
	//o if sempre retorna true ou false, se colocarmos um fget no resouce, ele retornara algo pois leu a primeira linha 
	while($row = fgets($file)){
		echo "<br>";
		$rowData = explode(",", $row);
		$linha = array();

	for($i = 0; i < count($headers); $i++){
		$linha[$headers[$i]] = 
	}


	}

	
}
echo count($headers);
*/