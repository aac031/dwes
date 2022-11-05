<?php
//Creamos la función 'comprobacion' para poder logearnos correctamente...
function comprobacion($usuario, $password)
{
    //Si el usuario introduce correctamente las credenciales podrá logearse.
    if ($usuario === "usuario" && $password === "1234") {
        $acceso["usuario"] = "usuario";
        return $acceso;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        if (!empty($_POST["usuario"]) && !isset($_COOKIE["usuario"])) {
            //Comprobamos el acceso mediante la función 'comprobacion'.
            $acceso = comprobacion($_POST["usuario"], $_POST["password"]);
            if ($acceso !== false) {
                //Si accedemos correctamente, creamos una cookie.
                setcookie("usuario", $_POST["usuario"], time() + 300);
                //Nos redirigimos a 'home.php'
                header("Location: /Trabajo_Evaluable_1/Ejercicio_19?method=home");
            } else {
                //Si el acceso es inválido.
                //Borramos la cookie por si se haya creado.
                setcookie("usuario", '', time() - 7200);
                //Nos redirigiremos a 'login' y nos muestra un mensaje de error.
                header("Refresh:1; URL = /Trabajo_Evaluable_1/Ejercicio_19?method=login");
                echo "<h2>Usuario y/o Contraseña incorrectos.</h2>";
                echo "<h3>Intente otra vez...";
                exit();
            }
        }
    }
}
?>
