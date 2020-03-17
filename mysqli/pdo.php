<?php


$conn = new PDO("mysql:dbname=login;localhost", "root", "");

$stmt = $conn -> prepare("SELECT * FROM usuarios");

$stmt -> execute();

$view = $stmt -> fetchAll(PDO::FETCH_ASSOC);

print_r($view);