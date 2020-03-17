<?php
$conn = new mysqli("localhost", "root", "", "login");


$consulta = $conn -> query("SELECT * FROM usuarios");
$cadastro = array();
while($row = $consulta -> fetch_array()){
    array_push($cadastro, $row['usuarios']);


}

echo json_encode(
    $cadastro
);