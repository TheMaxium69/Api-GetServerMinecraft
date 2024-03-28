<?php



function getFactionByUser($pseudo){

    include "./env.php";

    $factionsFile = getFile($f_factionsFile);

    return $factionsFile;

}