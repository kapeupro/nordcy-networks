<?php

require_once("pdo.php");
require_once("function.php");


echo 'hello';

$json_url = "http://51.255.160.47:8282/resources/frames.json";
$json = file_get_contents($json_url);
$data = json_decode(($json));
debug($data);
echo $data[13]->protocol->type;echo '<br>'; 

foreach($data as $trame)  
 {
    echo $trame->date; echo '<br>'; // 1
    echo $trame->version; echo '<br>'; // 2
    echo $trame->headerLength; echo '<br>'; // 3
    echo $trame->service; echo '<br>'; // 4
    echo $trame->identification; echo '<br>'; // 5
    if(!empty($trame->status))echo $trame->status; echo '<br>'; // 6
    echo $trame->flags->code; echo '<br>'; // 7
    echo $trame->ttl; echo '<br>'; // 8
    echo $trame->protocol->name; echo '<br>'; // 9 
    echo $trame->flags->code; echo '<br>';    // 10
    echo $trame->protocol->checksum->status; echo '<br>'; // 11
    echo $trame->protocol->ports->from; echo '<br>';    // 12
    echo $trame->protocol->ports->dest; echo '<br>';   // 13
    if(!empty($trame->protocol->type))echo $trame->protocol->type; echo '<br>'; // 14
    if(!empty($trame->protocol->code))echo $trame->protocol->code; echo '<br>'; // 15
    echo $trame->headerChecksum; echo '<br>'; // 16
    echo $trame->ip->from; echo '<br>'; // 17
    echo $trame->ip->dest; echo '<br>';  // 18    
 } 

    $query = $pdo->prepare($sql);
    $query->binValue('data', $data);
    $query->binValue('version', $version);