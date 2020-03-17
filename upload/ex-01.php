<form method= "POST" enctype="multipart/form-data">

	<input type="file" name="file"><br><br>
	<button type="submit" name="btn" id="btn"> Enviar</button>
</form>

<?php



if(isset($_POST['btn'])){
	$file = $_FILES["file"];

	if($file["error"]){
		throw new Exception("Error: ". $file['erro']);
	}

	$dirUpload = "uploads";

	if(!is_dir($dirUpload)){
		mkdir($dirUpload);
	}

	if(move_uploaded_file($file['tmp_name'], $dirUpload.DIRECTORY_SEPARATOR.$file['name'])){
		echo "Upload Realizado com sucesso";

	}else{
		throw new Exception("Não foi possível realizar o Upload: ". $file["error"]);
	}
}

?>