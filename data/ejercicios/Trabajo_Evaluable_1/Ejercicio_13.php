<?php
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
            $usuario = comprobarUsuario($_POST["nombre"]);
            if ($usuario === false) {
                $error = 1;
            } else {
                // Si el usuario es válido...
                echo "<br>Bienvenido, " . $_POST["nombre"] . ".";
            }
        }
    }
    if (isset($error) && $error == 1) {
        echo "<br>Introduce un nombre correcto...";
    }
    ?>
</body>

</html>