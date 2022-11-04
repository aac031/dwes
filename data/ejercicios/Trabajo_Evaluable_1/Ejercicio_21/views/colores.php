<?php
session_start();
if (!isset($_SESSION['color'])) {
} else {
    $color = $_SESSION['color'];
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