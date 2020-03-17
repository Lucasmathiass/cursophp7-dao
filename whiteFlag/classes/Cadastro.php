<?php 
require_once("Sql.php");

class Cadastro{
	private $produto;
	private $ingredientes;
	private $valor;
	private $categoria;
	private $id;
	private $tamanho;


	 
	public function setProduto($produto) {
	    $this->produto = $produto;
	}
	public function setId($id) {
	    $this->id = $id;
	}
	public function setTamanho($tamanho) {
	    $this->tamanho = $tamanho;
	}

	public function setIngredientes($ingredientes) {
	    $this->ingredientes = $ingredientes;
	}

	public function setValor($valor){
		$this -> valor = $valor;
	}

	public function setCategoria($categoria){
		$this -> categoria = $categoria;
	}

	public function getProduto(){
		return $this -> produto;
	}

	public function getIngredientes(){
		return $this -> ingredientes;
	}

	public function getValor(){
		return $this -> valor;
	}

	public function getCategoria(){
		return $this -> categoria;
	}

	public function getId(){
		return $this -> id;
	}

	public function getTamanho(){
		return $this -> tamanho;
	}


	public function __construct($pro, $ing, $val, $cat, $tam){
		$this -> setProduto($pro);
		$this -> setIngredientes($ing);
		$this -> setValor($val);
		$this -> setCategoria($cat);
		$this -> setTamanho($tamanho);
	}


	public function upLoad(){
		$upLoad = new Sql();
		$upLoad -> query("INSERT INTO cadastro (produto, ingredientes,categoria, idProduto, tamanho, valor) VALUES (:PRODUTO,:INGREDIENTES)", array(
			":PRODUTO" => $this -> getProduto(),
			":INGREDIENTES" => $this -> getIngredientes(),
			":CATEGORIA" =>  $this -> produto, 
			":ID" => $this -> id,
			":TAMANHO" => $this ->  tamanho,
			":VALOR" => $this -> valor

		));

	}

	
	

}

