<?php

$capitales = [
    "España" => "Madrid",
    "Francia" => "París"
];

$infotrans = ""; 
$infonotrans = "";

$infotrans = serialize($capitales);
echo "<br>Informaicón serializada: ";
var_dump($infotrans);

$infonotrans = unserialize($infotrans);
echo "<br>Información deserializada: ";
var_dump($infonotrans);

$infotrans = json_encode($capitales);
echo "<br>Información en JSON: ";
var_dump($infotrans);

$infonotrans = json_encode($infotrans);
echo "<br>Información original desde JSON: ";
var_dump($infonotrans);