<?php
if (isset($_POST["envio"])) {
    if (!empty($_POST["idioma"]) && !isset($_COOKIE["idioma"])) {
        setcookie("idioma", $_POST["idioma"], time() + 3600);
    }
    if (!empty($_POST["marca"]) && !isset($_COOKIE["marca"])) {
        setcookie("marca", $_POST["marca"], time() + 3600);
    }
    if (!empty($_POST["idioma"]) && !empty($_POST["marca"])) {
        //redirige a visualizaopciones.php
        header("Location: visualizaopciones.php");
        exit(); //die();
    }
} else {
    //Borra las cookies y redirige al .html
    setcookie("idioma", '', time() - 7200);
    setcookie("marca", '', time() - 7200);
    header("Location: ejercicio19_10.html");
    exit();
}
