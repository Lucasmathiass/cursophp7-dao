<?php 

$file = "images";

if(!is_dir($file)){
	mkdir($file);
}else{
	$scan = scandir($file);
	foreach($scan as $value){
		//não pode conter no array

		if(!in_array($value, array(".", ".."))){
			$filename = "images".DIRECTORY_SEPARATOR.$value;
			unlink($filename);
		}
		
	}	

}
	



 ?>