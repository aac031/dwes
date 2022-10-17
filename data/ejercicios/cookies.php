<?php
//Definir una cookie, siempre tiene que aparecer antes que todo.
$miarray = ["hola", 25, [1, 3, 5]];
$infoguardar = serialize($miarray);

setcookie("PrimeraCookie", "aceptado", time()+300);
setcookie("PrimeraCookie", $infoguardar, time()+600);

echo "<h1>Mi primera cookie</h1>";
echo "<br>Valor de la cookie uno: " . $_COOKIE["PrimeraCookie"];
echo "<pre>";
var_dump (unserialize($_COOKIE["SegundaCookie"]));

echo "Nuḿero de cookies creadas: " . count($_COOKIE);

//setcookie("PrimeraCookie", "aceptado", time() - 120);