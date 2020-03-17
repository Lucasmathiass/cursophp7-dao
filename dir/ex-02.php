<?php
/*$files = array();
$images = scandir("images");
foreach($images as $value){
    if(!in_array($images, array(".",".."))){
        $file = "images".DIRECTORY_SEPARATOR. $value;
        $info = pathinfo($file);
        $info["size"] = filesize($file);
        array_push($files, $info);

    }
}
 echo json_encode($files);
*/


$file = "images";

if(!is_dir($file)){
    mkdir($file);
    
}else{
    
    $leitura = scandir($file);
    //para cada valor do array um associo n var de arquivo, depois ponho o caminho do arquiv na var file, logo apos verificarei o informacoes sobre o arquivo com file path, qu epos sua vez retorna o array com indice de informacoes no qua posso acessar
    foreach($leitura as $arquivo){
        $file = "images".DIRECTORY_SEPARATOR.$arquivo;
        $path = pathinfo($file);
        $path["size"]=filesize($file);
        $path["modified"] = date("d/m/y h:i:s", filemtime($file));
        $path["url"] = "http://localhost/dir/".str_replace("//", "\", $file);
        echo json_encode($path, JSON_UNESCAPED_SLASHES);
    }
    
}