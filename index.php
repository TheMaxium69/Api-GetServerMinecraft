<?php

// INIT
include "env.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if (empty($_GET['pseudo'])){
    echo json_encode(["status"=>"ok", "message"=>"no pseudo"]);
    exit();
}
$pseudo = $_GET['pseudo'];

// TASK
require "factions/init.php";


if (empty($_GET['task'])){

    $faction = getFactionByUser($pseudo);

    echo json_encode($faction);


} else {

    $task = $_GET['task'];




}



?>