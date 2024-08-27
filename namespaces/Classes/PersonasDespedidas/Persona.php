<?php

namespace PersonasDespedidas;

class Persona{
    
    protected $name;
    protected $date_despido;
    protected $despido_by;

    function __construct($name, $date_despido, $despido_by){
        $this->name = $name;
        $this->date_despido = $date_despido;
        $this->despido_by = $despido_by;
    }

    public function getName(){
        return $this->name;
    }

    public function getDatedespido(){
        return $this->date_despido;
    }

    public function getDespido_by(){
        return $this->despido_by;
    }



}