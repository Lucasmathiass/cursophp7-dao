<?php
//session_id('npm0689802c8pd4kgi1k20ulv8');
session_start();


$nome = $_SESSION['nome'] = "Lucas";
var_dump($_SESSION);

echo session_id();
 
