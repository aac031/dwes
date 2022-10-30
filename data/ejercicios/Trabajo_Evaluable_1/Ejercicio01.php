<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
</head>

<body>
    <h1>Datos Personales</h1>
    <?php
    if (isset($_GET['envio'])) {
        if (!empty($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            echo "<br>El nombre introducido es: " . $nombre;
        } else {
            echo "<br><h3>No has introducido ningún nombre.</h3>";
        }
        if (!empty($_GET['apellido'])) {
            $apellido = $_GET['apellido'];
            echo "<br>El apellido introducido es: " . $apellido;
        } else {
            echo "<br><h3>No has introducido ningún apellido.</h3>";
        }
        if (!empty($_GET['edad'])) {
            $edad = $_GET['edad'];
            echo "<br>La edad es: " . $edad;
        } else {
            echo "<br><h3>No has introducido ninguna edad.</h3>";
        }
        if (!empty($_GET['telefono'])) {
            $telefono = $_GET['telefono'];
            echo "<br>El teléfono introducido es: " . $telefono;
        } else {
            echo "<br><h3>No has introducido ningún teléfono.</h3>";
        }
        if (!empty($_GET['email'])) {
            $email = $_GET['email'];
            echo "<br>El email introducido es: " . $email;
        } else {
            echo "<br><h3>No has introducido ningún email.</h3>";
        }
    }
    ?>
</body>

</html>