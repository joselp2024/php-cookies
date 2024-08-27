<?php

require("Classes/PersonasDisponibles/Persona.php");
require("Classes/PersonasDespedidas/Persona.php");

use PersonasDisponibles\Persona;
use PersonasDespedidas\Persona as PersonasDespedidas;  //por que si tengo dos Persona nos dara un error, por ello lo renombro

$persona =  new Persona("Carlos",23,"GT");
$persona2 =  new Persona("Daniels",19,"Mx");
$persona3 =  new Persona("Juan",43,"Usa");

$persona_adopted =  new PersonasDespedidas("Carlos",new DateTime(2020-05-19),"Sara");
$persona2_adopted =  new PersonasDespedidas("Daniels",new DateTime(2024-06-9),"Daniela");
$persona3_adopted =  new PersonasDespedidas("Juan",new DateTime(2027-01-26),"Juana");

