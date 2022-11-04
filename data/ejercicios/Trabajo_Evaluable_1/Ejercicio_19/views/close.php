<?php
session_start();

$_SESSION = array();
session_destroy();
setcookie(session_name(), "", time() - 7200, '/');

if (isset($_COOKIE["usuario"])) {
    $usuario = $_COOKIE["usuario"];
    setcookie("usuario", $usuario, time() - 7200);

    header('Refresh: 1; URL = /Trabajo_Evaluable_1/Ejercicio_19/');

    echo "<h2>Cerrando sesión...</h2>";
}
