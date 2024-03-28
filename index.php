<?php

include "env.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if (empty($_GET['pseudo'])){
    echo json_encode(["status"=>"ok", "message"=>"no pseudo"]);
    exit();
}






?>