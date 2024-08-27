<?php

namespace App\Classes;

use App\Traits\Transporte;
class Moto{

    use Transporte;
    public function sayEncendido(){
        return "Moto Encendido";
    }

    public function Run(){
        return "Moto avanzando";
    }
}