<?php
/* Ejercicio_12: Crea un formulario para enviar campo nombre. 
Si el nombre existe se da un saludo. 
Si no existe se vuelve atrás indicando que el campo es obligatorio. */

/* Creamos una funcion que se encargará de comprobar si ya existe un usuario o no. */
/* En este caso solo habrán 3 usuarios "Carlos, Juan y Pedro". */
function comprobarUsuario($nombre)
{
    if ($nombre === "Carlos" || $nombre === "Juan" || $nombre === "Pedro") {
        $usuario["nombreusu"] = $_POST["nombre"];
        return $usuario;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        // LLamamos a la función para comprobar el nombre.
        $usuario = comprobarUsuario($_POST["nombre"]);
        //Si el nombre no es correcto nos mostrará un mensaje...
        if ($usuario === false) {
            $error = 1;
        } else {
            // Si el usuario existe...
            // Crearemos una sesión y nos redirigiremos a 'home.php'.
            session_start();
            $_SESSION["login_ok"] = $usuario;
            header("Location: home.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobación nombre</title>
</head>

<body>
    <!-- Pediremos al usuario que introduzca un nombre válido si no lo es, 
    se le mostraŕa un mensaje de error.  -->
    <form name="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" required>
        </p>

        <input type="submit" name="envio" value="Enviar">
    </form>
    <?php
    //El mensaje de error será este...
    if (isset($error) && $error == 1) {
        echo "<br><h3>Introduce un nombre correcto...</h3>";
    }
    ?>
</body>

</html>