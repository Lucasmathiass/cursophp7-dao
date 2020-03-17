<?php

function data($valores, $valor):float{
    return $valores / $valor;
}
echo gettype(data(4, 7));