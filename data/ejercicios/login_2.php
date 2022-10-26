<?php
// usuario : 1234 => rol = 0
// admin : 4567 => rol = 1
function comprobarCredenciales($nombreusu, $pswrd)
{
    if ($nombreusu === "usuario" && $pswrd === "1234") {
        $credenciales["nombreusu"] = "usuario";
        $credenciales["rol"] = 0;
        return $credenciales;
    }
    if ($nombreusu === "admin" && $pswrd === "5678") {
        $credenciales["nombreusu"] = "admin";
        $credenciales["rol"] = 1;
        return $credenciales;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        $credenciales = comprobarCredenciales($_POST["usuario"], $_POST["password"]);
        if ($credenciales === false) {
            $error = 1;
        } else {
            // Si las credenciales son válidas...
            session_start();
            $_SESSION["login_ok"] = $credenciales;
            header("Location: index_2.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Inicia sesión</h2>
    <?php
    if (isset($error) && $error == 1) {
        echo "<p><font color=\"red\">Credenciales inválidas</font></p>";
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <br>
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="envio" value="Acceder">
    </form>
</body>

</html>