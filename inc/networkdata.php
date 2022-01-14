<?php
require_once("pdo.php");
require_once("function.php");

$json_url = "http://51.255.160.47:8282/resources/frames.json";
$json = file_get_contents($json_url);
echo $json;
// transformation de l'API en un objet
$data = json_decode(($json));
debug($data);
echo $data[0]->date; echo "<br>";
echo $data[0]->version; echo"<br>";
echo $data[0]->protocol->name; echo"<br>";
echo $data[0]->protocol->checksum->status; echo"<br>";




