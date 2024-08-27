<?php

if (!isset($_COOKIE["example_cookie"])){

    setcookie(
        name:"example_cookie",
        value:"ASDsF",
        expires_or_options: 0,//time() +60*60*24*30, //por seg, min, hrs, dias
        path :"/",
        domain:"localhost",
        secure: false, //(true)podra definirse solo si el lugar tiene ssl es decir https
        httponly: true //(true)puede ser accedida desde forntend leeida por Js por ejepmleo
    );
    
    echo"cookie creada!";

}


echo "<pre>";
    var_dump($_COOKIE);
echo "</pre>";