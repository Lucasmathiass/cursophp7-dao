<?php
$conn = new PDO("mysql:dbname=login;localhost", "root", "");

$stmt = $conn -> prepare("INSERT INTO usuarios (nome, email) VALUES (:NOME, :EMAIL)");

$nome = "Lilian Emanuel";
$email = "Lilian@gmail.com ";

$stmt ->bindParam(":NOME", $nome);
$stmt -> bindParam(":EMAIL", $email);

$stmt -> execute();

?>