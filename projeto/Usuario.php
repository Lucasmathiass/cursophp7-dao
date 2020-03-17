<?php
require_once("config.php");

Class Usuario{
private $id;
private $nome;
private $senha;
private $email;
private $entrada;

public function getId(){
    return $this -> id;
}

public function getNome(){
    return $this -> nome;
}
public function getSenha(){
    return $this -> senha;
}
public function getEmail(){
    return $this -> email;
}

public function getEntrada(){
    return $this-> entrada;
}

public function setId($id){
    $this -> id = $id;
}

public function setNome($nome){
    $this -> nome = $nome;
}
public function setSenha($senha){
    $this -> senha= $senha;
}

public function setEmail($email){
    $this -> email = $email;
}

public function setEntrada($entrada){
    $this -> entrada = $entrada;
}

public function __toString(){
    $dados = array(
        "Id" => $this -> getId(),
        "Nome" => $this -> getNome(),
        "Senha" => $this -> getSenha(),
        "Email" => $this -> getEmail(),
        "Entrada" => $this -> getEntrada()
    );
    return json_encode($dados);
}

public function loadId($id){
    $load = new Sql();
    $result = $load -> select("SELECT * FROM usuarios WHERE id = :ID", array(
        ":ID" => $id ));
    
    if(count($result) > 0){
        $row = $result[0];

        $this -> setId($row["id"]); 
        $this -> setNome($row["nome"]);
        $this -> setSenha($row["senha"]);
        $this -> setEmail($row["email"]);
        $this -> setEntrada($row["entrada"]);
    }

}
}