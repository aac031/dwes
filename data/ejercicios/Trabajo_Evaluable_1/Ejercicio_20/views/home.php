<?php
//Si ya existe una cookie con algun valor (red, green o blue)...
if (isset($_COOKIE["color"])) {
    //con include cogemos la variable $color de 'cambio.php'
    include 'cambio.php';
    $color = $_COOKIE['color'];
    //Cambiamos de color de fondo con 'background-color'...
    echo "<body style='background-color:$color'>";
} else {
    //Si no existe la cookie nos redirigiremos a 'colores.php'
    header("Location: ?method=colores");
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
    <!-- Mostramos un mensaje de bienvenida. -->
    <h1>Bievenido</h1>
    <hr>
    <form action="?method=colores" method="POST">
        <input type="submit" value="Cambiar Color">
    </form>
</body>

</html>