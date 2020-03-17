<?php

$a = 10.0;

$b = 10;

var_dump($a === $b);
var_dump($a == $b);
var_dump($a !== $b);
var_dump($a != $b);

// novos operadores

// spaceship

$c = 20;

$d = 20;

var_dump($c <=> $d);

echo "<br>";

$e = NULL;

$f = NULL;

$g = 0;

echo $e ?? $f ?? $g;