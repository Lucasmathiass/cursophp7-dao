<?php
require_once("classes/Cadastro.php");

if(isset($_GET['bt'])){

	$produto = $_GET['produto'];
	$valor = $_GET['valor'];
	$ingredientes = $_GET['ingredientes'];
	$select = $_GET['select'];
	$tamanho = $_GET['tamanho'];
 	
 	$up = new Cadastro($produto, $ingredientes, $valor, $select, $tamanho);
	 $up -> upLoad();
	

}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="estilo.css">
 	<link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
 	<title></title>
	
</head>
<body>
<header id="header">

<h1>Cadastro de produtos</h1>
</header> 
	<div class="box-form">
<form method="GET">
	<input type="text" name="produto" id="produto" placeholder="Produto">

	<input type="text" name="valor" id="valor" placeholder=" R$ Valor"><br>
	<input type="text" name="tamanho" id="tamanho" placeholder="Tamanho">
	<br>
	
	<select name= "select" id="select">
	 	<option>Pizza</option>
	 	<option>Suco</option>
	 	<option>Refrigerante</option>
	 </select>
	 <br>
	
	<input type="text" name="ingredientes" id="ingredientes" pLaceholder="Ingredientes">
	
	<br>
	<button type="submit" name="bt" id="bt">Cadastar</button>
 </form>
</div>
<form>
</body>
</html>
 	
