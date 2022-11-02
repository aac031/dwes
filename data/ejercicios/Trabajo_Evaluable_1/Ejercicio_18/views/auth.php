<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        $nombreCookie = $_POST["usuario"];
        setcookie("PrimeraCookie", $nombreCookie, time() + 3600);
        header("Location: home.php");
    }
}
