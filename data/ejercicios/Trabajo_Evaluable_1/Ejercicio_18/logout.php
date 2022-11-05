<?php
//Comprobamos la sesion ...
session_start();
//Comprobamos si existe una sesión correcta ya realizada.
//Si no la hay, nos redirigirá directamente a 'login.php'.
if (!isset($_SESSION['login_ok'])) {
    header("Location: login.php");
}

//Destruimos la sesión al hacer 'logout'
//Y nos redirigiremos a 'login'
$_SESSION = array();
session_destroy();
setcookie(session_name(), "", time() - 7200, '/');

header('Refresh: 1; URL = login.php');

echo "<h2>Desconectando...</h2>";
