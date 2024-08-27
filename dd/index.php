<?php

require("vendor/autoload.php");

class Persona {

    protected $habilidades = [];
    protected $edad  ;

    function __construct(int $edad) {
        $this->edad = $edad;

        for ($i = 0; $i < 4; $i++) {
            $this->habilidades[$i] = new Habilidades();   
        }
    }
}


class Habilidades {
    protected $comunes = 4;
    protected $description = "son comunes";

    public function get_descriptio():string {
        return $this->description;
    }
}

$casa_de_personas = array(
    "nombre" => "Hotel",
    "ubicacion"=>[
        "pais"=>"guatemala",
        "ciudad"=>"guatemala",
        "zon"=>"4",
        "numero"=>2
    ],
    "numero de huespedes"=>2,
    "huespedes"=>[
        new Persona(23),
        new Persona(51),
        new Persona(48),
    ]
);


dd($casa_de_personas);