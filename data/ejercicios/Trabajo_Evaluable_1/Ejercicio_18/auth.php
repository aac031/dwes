<?php
//Creamos la función 'comprobacion' para poder logearnos correctamente...
function comprobacion($usuario, $password)
{
    //Si el usuario introduce correctamente las credenciales podrá logearse.
    if ($usuario === "admin" && $password === "12345") {
        $acceso["usuario"] = "admin";
        return $acceso;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        //Comprobamos el acceso mediante la función 'comprobacion'.
        $acceso = comprobacion($_POST["usuario"], $_POST["password"]);
        if ($acceso !== false) {
            //Si accedemos correctamente, creamos una sesion llamado 'login_ok'.
            session_start();
            $_SESSION["login_ok"] = $acceso;
            //Nos redirigimos a 'home.php'
            header("Location: home.php"); 
        } else {
            //Si los datos introducidos son incorrectos volveremos a 'login.php'
            header("Refresh:1; URL = login.php");
            echo "<h1>Usuario y/o Contraseña incorrectos.</h1>";
            echo "<h3>Intente otra vez...";
        }
    }
}
