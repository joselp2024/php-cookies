<?php

namespace App\Classes;

use App\Traits\Transporte;

class Auto{

    use Transporte;
    
    public function sayEncendido(){
        return "Carro Encendido";
    }

    public function Run(){
        return "Carro avanzando";
    }
}