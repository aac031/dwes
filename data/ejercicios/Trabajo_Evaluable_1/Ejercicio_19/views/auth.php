<?php
function comprobacion($usuario, $password)
{
    if ($usuario === "usuario" && $password === "1234") {
        $acceso["usuario"] = "usuario";
        return $acceso;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        if (!empty($_POST["usuario"]) && !isset($_COOKIE["usuario"])) {
            $acceso = comprobacion($_POST["usuario"], $_POST["password"]);
            if ($acceso !== false) {
                setcookie("usuario", $_POST["usuario"], time() + 300);
                header("Location: /Trabajo_Evaluable_1/Ejercicio_19?method=home");
                exit();
            } else {
                setcookie("usuario", '', time() - 7200);
                header("Refresh:1; URL = /Trabajo_Evaluable_1/Ejercicio_19/");
                echo "<h2>Usuario y/o Contraseña incorrectos.</h2>";
                echo "<h3>Intente otra vez...";
                exit();
            }
        }
    }
}
?>
