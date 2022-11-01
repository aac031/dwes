<?php
session_start();

if (!isset($_SESSION["login_ok"])) {
    header("Location: Ejercicio_12.php");
}

echo "<h2>Bienvenido, " . $_SESSION["login_ok"]["nombreusu"] . ": </h2>";
echo "<br>";
echo "<a href=\"Ejercicio_12.php\">Cerrar Sesión</a>";