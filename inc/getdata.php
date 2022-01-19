<?php

require_once("pdo.php");
require_once("function.php");

// réaliser une requete sql avec un select pour récupérer les données de la table
function getJsonData(){
    global $pdo;
    $sql = "SELECT * FROM `nordcynetwork_data`";
    $query = $pdo->prepare($sql);
    $query->execute();
    return json_encode($query->fetchAll());
}

    $sqlData = getJsonData();
    echo $sqlData;

?>