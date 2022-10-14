<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>

<body>
    <h1>Usuario</h1>
    <?php
    $nombreUsuario = $_POST['usuario'];
    $verificar_usuario = 0;

    if (isset($_GET['envio'])) {
        if (!empty($_GET['usuario'])) {
            $nombreUsuario = $_GET['usuario'];
            echo "<br>El nombre de usuario es: " . $nombreUsuario;
        } else {
            echo "<br><h3>No has introducido ningún nombre de usuario.</3>";
        }
    }
    ?>

</body>

</html>