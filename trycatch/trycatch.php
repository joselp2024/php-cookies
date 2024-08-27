<?php

try {   
    $resultado = 20/0;
    echo $resultado;
} catch (Throwable $e) {
    //echo $e->getMessage();  //podriamos poner algun mensaje para mostrar el tipo de error
    echo "Algo salio mal";

}

echo"<br>";

echo "esto si llega";