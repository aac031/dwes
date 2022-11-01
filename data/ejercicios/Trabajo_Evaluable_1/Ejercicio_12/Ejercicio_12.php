<?php
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
        $usuario = comprobarUsuario($_POST["nombre"]);
        if ($usuario === false) {
            $error = 1;
        } else {
            // Si las credenciales son válidas...
            session_start();
            $_SESSION["login_ok"] = $usuario;
            header("Location: Ejercicio_12_index.php");
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
    <form name="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" required>
        </p>

        <input type="submit" name="envio" value="Enviar">
    </form>
    <?php
    if (isset($error) && $error == 1) {
        echo "<br><h3>Introduce un nombre correcto...</h3>";
    }
    ?>
</body>

</html>