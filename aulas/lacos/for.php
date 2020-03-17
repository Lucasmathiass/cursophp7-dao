<?php
// sem o continue, o valor rodará até a prieira condição satisfatória 
for($i = 0; $i < 1000; $i++){
 
 if($i > 100 && $i < 800)continue;

  if ($i == 900) break;
 	
 	echo $i. " ";

}