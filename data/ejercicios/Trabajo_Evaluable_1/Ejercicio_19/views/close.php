<?php
//Comprobamos si hay alguna sesión
session_start();
//Al hacer 'logout' eliminaremos la sesión
$_SESSION = array();
session_destroy();
setcookie(session_name(), "", time() - 7200, '/');

//Comprobamos la cookie 'usuario' que fue la que creamos en 'auth'
if (isset($_COOKIE["usuario"])) {
    $usuario = $_COOKIE["usuario"];
    //Si está dicha cookie, la eliminaremos.
    setcookie("usuario", $usuario, time() - 7200);
    //Nos redirigiremos a 'login'.
    header('Refresh: 1; URL = ?method=login');

    echo "<h2>Cerrando sesión...</h2>";
}
