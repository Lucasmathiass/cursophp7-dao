<?php
date_default_timezone_set("AMERICA/FORTALEZA");

$dir = scandir("images");


foreach($dir as $value){
    if(!in_array($dir, array(".", ".."))){
        $filename = "images".DIRECTORY_SEPARATOR.$value;
        echo "<br>";
        $info = pathinfo($filename);
        echo $info["modified"] =date("d-m-Y h:i:s", filemtime($filename));
        $info["url"] = "http://localhost/dir/".str_replace("//", "\", $filename);
    }
    



}