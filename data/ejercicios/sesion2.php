<?php
session_start();

$_SESSION = array();
session_destroy();
setcookie(session_name(),'',time()-7200,'/');

echo "La página se ha cargado " . $_SESSION["contador"] . " veces.";

echo "<br>Producto: " . $_SESSION["producto"];