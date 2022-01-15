<?php 
require_once("inc/pdo.php");


function getJsonData()
{
    global $pdo;
    $sql = "SELECT * FROM `nordcynetwork_data`";
    $query = $pdo->prepare($sql);
    $query->execute();    
    return json_encode($query->fetchAll());
}

$test = getJsonData(); 
echo $test;