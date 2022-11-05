<?php
//Si ya exite una cookie con algun valor (red, green o blue)...
if (isset($_COOKIE["color"])) {
    //con include cogemos la variable $color de 'cambio.php'
    include 'cambio.php';
    $color = $_COOKIE['color'];
    //Cambiamos de color de fondo con 'background-color'...
    echo "<body style='background-color:$color'>";
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