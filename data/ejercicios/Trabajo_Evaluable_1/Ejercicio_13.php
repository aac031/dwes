<?php
/* Crea un formulario para enviar campo nombre. 
El nombre debe existir y debe tener un tamaño mínimo de 3 caracteres. 
Si es válido se da un saludo. Si no lo es se vuelve a mostar el formulario indicando 
que el campo es obligatorio y mostrando en el "input" el valor anterior no válido. */

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <!-- Pediremos al usuario que introduzca un nombre válido si no lo es, 
    se le mostraŕa un mensaje de error.  -->
    <form name="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" minlength="3" name="nombre" id="nombre" required>
        </p>

        <input type="submit" name="envio" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["envio"])) {
            // LLamamos a la función para comprobar el nombre.
            $usuario = comprobarUsuario($_POST["nombre"]);
            //Si el nombre no es correcto nos mostrará un mensaje...
            if ($usuario === false) {
                $error = 1;
            } else {
                //Si el usuario es correcto se le mostrará un mensaje de bienvenida... 
                echo "<br>Bienvenido, " . $_POST["nombre"] . ".";
            }
        }
    }
    //El mensaje de error será este...
    if (isset($error) && $error == 1) {
        echo "<br>Introduce un nombre correcto...";
    }
    ?>
</body>

</html>