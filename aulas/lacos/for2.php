<?php

for($i = date("Y"); $i > date("Y") -100; $i--){
	echo $i. " ";

}


 echo "<hr>";

for ($i= 100; $i > 1; $i--){
	echo $i. " ";
}

echo "<hr> <hr>";

echo "<select>";

for($i = date('Y'); $i > 1921; $i--){
	 echo "<option> $i </option>";

}

echo "</select>";