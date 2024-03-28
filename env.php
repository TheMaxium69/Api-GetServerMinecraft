<?php

/********************
 *
 *  MINECRAFT
 *
 ******************** */

// usercache.json
$usercacheFile = "C:\Users\mxmto\Desktop\Factions\data/usercache.json";

// usernamecache.json
$usernamecacheFile = "C:\Users\mxmto\Desktop\Factions\data/usernamecache.json";


/********************
 *
 *  PLUGIN FACTION
 *
 ******************** */

// factions.json
$f_factionsFile = "C:\Users\mxmto\Desktop\Factions\data/factions.json";

// players.json
$f_playersFile = "C:\Users\mxmto\Desktop\Factions\data/players.json";


/********************
 *
 *  PLUGIN GRADE
 *
 ******************** */



/********************
 *
 *  PLUGIN ECONOMY
 *
 ******************** */




/*****************
 *  FUNCTION GET
 ***************** */

function getFile($jsonFilePath){

    if (file_exists($jsonFilePath)) {

        $jsonContent = file_get_contents($jsonFilePath);

        $data = json_decode($jsonContent, true);

        if ($data === null) {
            return "Erreur de décodage JSON";
        } else {
            return $data;
        }
    } else {
        return "Le fichier JSON n'existe pas.";
    }
}

?>