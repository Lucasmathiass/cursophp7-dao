<?php

$conn = new mysqli("localhost", "root", "", "login");

if($conn -> connect_error){
    echo "erro encontrado". $conn -> connect_error;
}


$stmt = $conn -> prepare("INSERT INTO usuarios (nome,email) VALUES (?,?)");
$stmt -> blind_param("ss", $login, $senha);
$login = "Lucas";
$senha = "Senha";
$stmt ->execute();