<?php
    header('Refresh: 5; URL = /Trabajo_Evaluable_1/Ejercicio_01/Ejercicio_01.html');
?>

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
    if (isset($_POST['envio'])) {
        if (!empty($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            echo "<br>El nombre introducido es: " . $nombre;
        } else {
            echo "<br><h3>No has introducido ningún nombre.</h3>";
        }
        if (!empty($_POST['apellido'])) {
            $apellido = $_POST['apellido'];
            echo "<br>El apellido introducido es: " . $apellido;
        } else {
            echo "<br><h3>No has introducido ningún apellido.</h3>";
        }
        if (!empty($_POST['edad'])) {
            $edad = $_POST['edad'];
            echo "<br>La edad es: " . $edad;
        } else {
            echo "<br><h3>No has introducido ninguna edad.</h3>";
        }
        if (!empty($_POST['telefono'])) {
            $telefono = $_POST['telefono'];
            echo "<br>El teléfono introducido es: " . $telefono;
        } else {
            echo "<br><h3>No has introducido ningún teléfono.</h3>";
        }
        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            echo "<br>El email introducido es: " . $email;
        } else {
            echo "<br><h3>No has introducido ningún email.</h3>";
        }
    }
    ?>
</body>

</html>