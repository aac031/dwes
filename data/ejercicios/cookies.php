<?php
//Definir una cookie, siempre tiene que aparecer antes que todo.
$miarray = ['a'=>"hola", 'b'=>25, 'c'=>[1, 3, 5]];
$infoguardar = serialize($miarray);

echo "<br>Codificación del array en JSON: " . $infojson;
$infojson = json_encode($miarray);
var_dump($infojson);

echo "<br>Decodificación del array en JSON: ";
$micad = '{"a":hola, "b":10}';
$infodeco = json_encode($micad);

var_dump(json_encode($micad));

/*
$infojson = json_encode($miarray);
echo "<br>Info en json: " . $infojson;

setcookie("PrimeraCookie", $infoguardar, time() + 300);
setcookie("SegundaCookie", $infojson, time() + 600);

echo "<h1>Mi primera cookie</h1>";
echo "<br>Valor de la cookie uno: " . $_COOKIE["PrimeraCookie"];
echo "<pre>";
echo "<br>Valor de la cookie dos: ";
var_dump($infojson);

echo "<br>Nuḿero de cookies creadas: " . count($_COOKIE);
*/
//setcookie("PrimeraCookie", "aceptado", time() - 120);