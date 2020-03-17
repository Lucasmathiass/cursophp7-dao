<?php
if(isset($_GET)){
	foreach($_GET as $key => $value){
 		echo "<p> Nome do Campo:". $key. "Valor: ". $value. "</p>";
 }
}
 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="nome">
		<input type="date" name="nascimento">
		<input type="submit" value="ok" name="">
	</form>
</body>
</html>