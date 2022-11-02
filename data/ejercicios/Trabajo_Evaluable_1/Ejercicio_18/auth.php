<?php
function comprobacion($usuario, $password)
{
    if ($usuario === "admin" && $password === "12345") {
        $acceso["usuario"] = "admin";
        return $acceso;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        $acceso = comprobacion($_POST["usuario"], $_POST["password"]);
        if ($acceso !== false) {
            session_start();
            $_SESSION["login_ok"] = $acceso;
            setcookie("PrimeraCookie",$_SESSION["login_ok"]["usuario"], time() + 300);
            header("Location: home.php"); 
        } else {
            header("Refresh:1; URL = login.php");
            echo "<h1>Usuario y/o Contraseña incorrectos.</h1>";
            echo "<h3>Intente otra vez...";
        }
    }
}
