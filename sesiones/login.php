<?php

session_start();

$users = [

    array(
        "username" => "Jose",
        "email"=> "sadf@gag.com"
    ),
    array(
        "username" => "Carlos",
        "email"=> "adsf@gag.com"
    ),

];

$user = $_GET["user"] ?? ""; // es ??: y si no hay 

echo "usuario elegido: ".$users[$user]["username"];


$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];