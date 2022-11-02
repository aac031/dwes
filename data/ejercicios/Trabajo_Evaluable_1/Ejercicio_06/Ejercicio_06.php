<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
        $jugadores = $_POST["nombre"];
        echo "<ul>";
        foreach ($jugadores as $jugador1) {
            echo "<br><li>Jugador: " . $jugador1 . "</li>";
        }
        echo "<br><pre>";
        print_r($jugadores);
        echo "</pre>";
        echo "</ul>";
    }
}
