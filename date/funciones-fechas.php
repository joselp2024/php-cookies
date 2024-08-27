<?php

// Establecer la zona horaria

date_default_timezone_set("America/Guatemala");
date_default_timezone_get();

//obtener la fecha actual

$now = date("Y-m-d H:i:s");
//$now = date_create(); //esto es un objeto date no un string

//strtotime, transfomra una cadena de tetp a formato time unix

//echo strtotime($now);

echo"\n";
//echo strtotime("17 april 2022");

// echo strtotime("next Monday");
// echo strtotime("last Wednesday");

// $unix_time = strtotime("+1 week");
// echo date("Y-m-d H:i:s", $unix_time); 

// Fechas inmutables
$date_immutable = new DateTimeImmutable();



//diferencia de tiempo

// $today = new DateTime(); //usamos datetime cuando queremos manipular una fecha
// $birth = new DateTime("1998-04-20");
// $interval =$birth->diff($today);

// echo $interval->format("%y años %m meses con %d dias");



// //crear desde un formato dato
// $date = DateTime::createFromFormat("l j F Y","Sunday 17 april 2022");
// echo $date->format("Y-m-d H:i:s");




//Modificar una fecha

$date = new DateTime();
//$date->modify("+1 day +2 months");
$date->modify("-1 year");
echo $date->format("Y-m-d");
