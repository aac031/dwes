<?php
//Comprobamos la sesión...
session_start();
//Comprobamos si existe una sesión correcta ya realizada.
//Si no la hay, nos redirigirá directamente a 'login.php'.
if (!isset($_SESSION['login_ok'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <!-- Damos la bienvenida al usuario con un mensaje. -->
    <?php
    echo "<h2>Bienvenido, " . $_SESSION["login_ok"]["usuario"] . ".</h2>";
    ?>
    <!-- El usuario podrá desconectarse -->
    <form action="logout.php">
        <input type="submit" name="envio" value="Desconectarse">
    </form>
</body>

</html>