<?php
$conn = new PDO("mysql:dbname=login; localhost", "root", "");

$stmt = $conn -> prepare("DELETE FROM usuarios WHERE id = :NUM");
$act = 1;
$stmt -> bindParam(":NUM", $act);

$stmt -> execute();

