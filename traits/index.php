<?php 
require("vendor/autoload.php");
use App\Classes\Auto;
use App\Classes\Moto;

$auto1= new Auto();
$auto2= new Moto(); 

echo $auto1->sayEncendido();
echo"\n";
echo $auto1->acelerar();
echo"\n";


echo $auto2->sayEncendido();
echo"\n";
echo $auto2->acelerar();
echo"\n";