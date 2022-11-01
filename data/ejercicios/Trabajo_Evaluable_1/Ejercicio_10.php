<?php
$equipo = array(
    "Pedro" => "Base",
    "Juan" => "Escolta",
    "Jorge" => "Alero",
    "Manolo" => "Alapivot",
    "Carlos" => "Pivot"
);

foreach ($equipo as $jugador => $posicion) {
    echo "<br><pre>";
    echo $jugador . " => " . $posicion;
    echo "</pre>";
}
