<?php

use App\Classes\PersonaDespedida;
use App\Classes\PersonaDisponible;

function createPersona(){
    $persona= new PersonaDisponible("Juan",23,"MX");
    $persona_adopted= new PersonaDespedida("Juan",new DateTime(2021-06-24),"Sara");

    echo $persona->sayHola()." fui despedido por {$persona_adopted->getDespido_by()}";
}
