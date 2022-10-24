<?php

if (isset($_COOKIE["idioma"]) && isset($_COOKIE["marca"])) {
    $idioma = $_COOKIE["idioma"];
    $marca = $_COOKIE["marca"];

    $mensajeidiom = "";
    $mensajecoche = "";

    switch ($idioma) {
        case "es":
            $mensajeidiom = "Bienvenido, querido usuario.";
            $mensajecoche = "Tu marca de coche favorito es: ";
            break;
        case "en":
            $mensajeidiom = "Welcome, dear user.";
            $mensajecoche = "Your favourite car brand is: ";
            break;
        case "de":
            $mensajeidiom = "Willkommen, Lieber Benutzer.";
            $mensajecoche = "Ihre Lieblingsautomarke is: ";
            break;
        default:
            $mensajeidiom = "Bienvenido, querido usuario.";
            $mensajecoche = "Tu marca de coche favorito es: ";
            break;
    }

    $mensajecoche = $mensajecoche . $marca;

    echo "<h2>" . $mensajeidiom . "</h2>";
    echo "<h2>" . $mensajecoche . "</h2>";
} else {
    echo "<h3>Debe seleccionar algunos datos.</h3>";
    echo "<a href=\"ejercicio19_10.html\">Volver al inicio.</a>";
}
