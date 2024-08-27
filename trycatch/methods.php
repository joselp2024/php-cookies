<?php


function camino2(){
    return 20/0;
}

function camino(){
    return camino2();
}

function division(){
    return camino();
}

try {
    //$resultado = 10/0;
    $resultado = division();
    echo $resultado;

} catch (Throwable $e) {
    //echo $e->getMessage();
    //echo $e->getCode();
    //echo $e->getFile();
    //echo $e->getLine();
    
    echo "<pre>";
    var_dump($e->getTrace());
    echo "</pre>";
}