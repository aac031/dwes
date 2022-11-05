<?php
//Comprobamos o creamos la sesión
session_start();
//Comprobamos si 'color' ha sido enviado...
if (isset($_POST["color"])) {
    $color = $_POST['color'];
    //Creamos una sesión.
    $_SESSION['color'] = $color;
    //Redirigimos a 'home.php'
    header("Location: ?method=home");
}
