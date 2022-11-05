<?php
header('Refresh: 7; URL = formulario.html');
/* Usaremos "Refresh: 7" en header para mostrar la información de los datos enviados
    por el formulario durante un 7 segundos, después de ese tiempo se regresará
    a la página de introducción de datos. */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
</head>

<body>
    <!-- Recibiremos todos los datos enviados anteriormente por el formulario. -->
    <h1>Datos Personales</h1>
    <?php
    /* Comprobamos que se enviarion los datos
    Si el usuario deja algún campo vacío se le mostrará un mensaje de que
    no ha introducido nada en ese campo. */
    if (isset($_POST['envio'])) {
        /* Se recibe el valor de 'nombre'. */
        if (!empty($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            echo "<br>El nombre introducido es: " . $nombre;
        }

        /* Se recibe el valor de 'apellido'. */
        if (!empty($_POST['apellido'])) {
            $apellido = $_POST['apellido'];
            echo "<br>El apellido introducido es: " . $apellido;
        }

        /* Se recibe el valor de 'edad', si está vacío se mostrará un mensaje. */
        if (!empty($_POST['edad'])) {
            $edad = $_POST['edad'];
            echo "<br>La edad es: " . $edad;
        } else {
            echo "<br><h3>No has introducido ninguna edad.</h3>";
        }

        /* Se recibe el valor de 'telefono', si está vacío se mostrará un mensaje. */
        if (!empty($_POST['telefono'])) {
            $telefono = $_POST['telefono'];
            echo "<br>El teléfono introducido es: " . $telefono;
        } else {
            echo "<br><h3>No has introducido ningún teléfono.</h3>";
        }

        /* Se recibe el valor de 'email', si está vacío se mostrará un mensaje. */
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