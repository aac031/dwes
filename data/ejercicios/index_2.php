<?php
session_start();

if (!isset($_SESSION["login_ok"])) {
    header("Location: login_2.php");
}
//var_dump($_SESSION["login_ok"]);
echo "<h2>Bienvenido: </h2>" . $_SESSION["login_ok"]["nombreusu"];
echo "<h2>El valor de tu rol es: </h2>" . $_SESSION["login_ok"]["rol"];
echo "<br><br>";
echo "<a href=\"logout_2.php\">Cerrar Sesión</a>";
?>