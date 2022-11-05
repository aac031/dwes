<?php
//Comprobamos si 'color' ha sido enviado...
if (isset($_POST["color"])) {
    $color = $_POST['color'];
    //Creamos una cookie que tendrá de valor = 'red, green o blue'.
    setcookie("color", $color, time() + 3600);
    //Redirigimos a 'home.php'
    header ("Location: ?method=home");
}
