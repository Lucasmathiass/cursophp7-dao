
<form method= "POST" enctype="multipart/form-data">

	<input type="file" name="file"><br><br>
	<button type="submit" name="btn" id="btn"> Enviar</button>
</form>
<?php
class Stream{
	private $file;
	private $fileTmp;
	private $destination;

	public function getFile () {
	    return $this->file ;
	}
	 
	public function setFile ($file ) {
	    $this->file  = $file ;
	}
	public function getFileTmp() {
	    return $this->fileTmp;
	}
	 
	public function setFileTmp($fileTmp) {
	    $this->fileTmp = $fileTmp;
	}
	public function getDestination() {
	    return $this->destination;
	}
	 
	public function setDestination($destination) {
	    $this->destination = $destination;
	}

	public function __construct($file){
		$this -> setFile($file);
		
	}

	public function upload(){
		return $file = $_FILES[ $this -> file];

		



	}
}

$u = new Stream('file');
echo $u -> upload();