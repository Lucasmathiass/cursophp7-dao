<?php
date_default_timezone_set("AMERICA/FORTALEZA");
$file = fopen("log.txt", "a");

fwrite($file, "Ultimo log: ".date("d-m-Y H:i:s")."\r\n");