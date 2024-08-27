<?php

try {   
    $pet = readline("Que quieres adoptar?");

    if($pet != "gato" && $pet != "perro") {
        throw new Exception("lo sentimos, no se puede adoptar $pet");
    }

    echo"usted adopto un $pet";
}catch(Throwable $e){
    echo $e->getMessage();
}

