<?php
/* Ejercicio_10: En esta ocasión debes usar un array asociativo. 
Cada posición se llamará correctamente: base, escolta, alero, alapivot, pivot. 
Muestra el resultado con un "foreach (clave => valor)" */

/* Creamos el array. */
$equipo = array(
    "Pedro" => "Base",
    "Juan" => "Escolta",
    "Jorge" => "Alero",
    "Manolo" => "Alapivot",
    "Carlos" => "Pivot"
);

/* Mostramos el array donde se ve a cada jugador con su respectiva posición. */
echo "Lista de jugadores:";
echo "<br>";
foreach ($equipo as $jugador => $posicion) {
    echo "<br><pre>";
    echo $jugador . " => " . $posicion;
    echo "</pre>";
}
