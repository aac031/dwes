<?php
//Comprobamos o creamos la sesión
session_start();
if (!isset($_SESSION['color'])) {
    //Si no existe no hará ningún cambio en la página.
} else {
    $color = $_SESSION['color'];
    //Cambiamos de color de fondo con 'background-color'...
    echo "<body style='background-color: $color'>";
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
    <!-- El usuario seleccionará el color al que desea cambiar. -->
    <form action="?method=cambio" method="POST">
        <label for="color">Seleccion el color:</label>
        <select name="color">
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
        </select>
        <input type="submit" value="Cambiar color">
    </form>
</body>

</html>