<?php
session_start();

$_SESSION = array();
session_destroy();
setcookie(session_name(), "", time() - 7200, '/');

$cookie_name = "PrimeraCookie";
setcookie($cookie_name, "", time() - 3600);

header('Refresh: 1; URL = login.php');

echo "<h2>Desconectando...</h2>";