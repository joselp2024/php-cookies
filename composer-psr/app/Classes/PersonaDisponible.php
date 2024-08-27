<?php

namespace App\Classes;

class PersonaDisponible{
   protected $name;
   protected $edad;
   protected $nacionalidad;

   function __construct($name, $edad, $nacionalidad){
      $this->name = $name; 
      $this->edad = $edad;
      $this->nacionalidad = $nacionalidad;
   }

   public function getName(){
      return $this->name;
   }

   public function getEdad(){
      return $this->edad;
   }

   public function getNacionalidad(){
      return $this->nacionalidad;
   }



   public function sayHola(){
      return "Hola";
   }
}