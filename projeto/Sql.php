<?php
class Sql extends PDO{
    private $conn;

    //construtor para iniciar a coneao com o bd assim que a classe for instanciada
    public function __construct(){
        $this -> conn = new PDO("mysql:dbname=login;localhost", "root", "");

    }

    public function query($raw, $bind = array()){
        $stmt = $this -> conn -> prepare($raw);

        foreach($bind as $key => &$value){
            $stmt -> bindParam($key, $value);
        }

        $stmt ->execute();
        return $stmt;
    }

    

    public function select($raw, $pamars = array()){
    $stmt = $this ->query($raw, $pamars);
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
}
}
