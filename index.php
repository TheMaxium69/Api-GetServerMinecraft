<?php

// INIT

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

    $result['faction'] = getFactionByUser($pseudo);


    echo json_encode([
        "status"=>"ok",
        "message"=>"Information de " . $pseudo,
        "result"=>$result
    ]);

} else {

    $task = $_GET['task'];

    if ($task == "faction"){

        $result = getFactionByUser($pseudo);

        echo json_encode([
            "status"=>"ok",
            "message"=>"La faction de " . $pseudo,
            "result"=>$result
        ]);


    } else {

        echo json_encode([
            "status"=>"ok",
            "message"=>"task inconnue"
        ]);


    }


}


?>