<?php
session_start();

$_SESSION = array();
session_destroy();
setcookie(session_name(), "", time() - 7200, '/');

header('Refresh: 1; URL = login_2.php');

echo "<h2>Cerrando sesión...</h2>";
