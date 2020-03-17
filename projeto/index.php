<?php
require_once("config.php");

$load = new Usuario();
$load -> loadId(2);
echo $load;