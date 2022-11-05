<?php
/* Comprobamos que ha sido recibido todo correctamente. */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
        $jugadores = $_POST["nombre"];
        /* Mostraremos la lista indicando sólo los nombres. */
        echo "<ul>";
        echo "Lista sólo nombres:<br>";
        foreach ($jugadores as $jugador1) {
            echo "<br><li>Jugador: " . $jugador1 . "</li>";
        }
        echo "<br><br>" . "Lista indicando posición en array:<br>" . "<pre>";
        /* Mostramos la lista indicando la posición del nombre en el array. */
        print_r($jugadores);
        echo "</pre>";
        echo "</ul>";
    }
}