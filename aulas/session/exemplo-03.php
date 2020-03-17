<?php
echo session_id();
session_start();

if(session_id() != 'npm0689802c8pd4kgi1k20ulv8'){
    $nome = $_SESSION['nome'] = 'blue';
    echo $nome;
}else{
    $nome = $_SESSION['nome'] = 'red';
}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background:<?php echo $nome ?>;
        }
    </style>
</head>
<body>
    
</body>
</html>