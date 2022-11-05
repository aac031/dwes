<?php
// Crearemos o reanudaremos la sesión...
session_start();

//Si la sesión no es correcta se redirigirá a "login.php"...
if (!isset($_SESSION["login_ok"])) {
    header("Location: login.php");
}

//Si el usuario es correcto se le mostrará un mensaje de bienvenida... 
echo "<h2>Bienvenido, " . $_SESSION["login_ok"]["nombreusu"] . ": </h2>";
echo "<br>";
echo "<a href=\"login.php\">Cerrar Sesión</a>";
