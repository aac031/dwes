<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Home</title>
</head>

<body>
    <?php
    //Una vez creada la cookie y accedido sin problemas, veremos el header de la página
    require('header.php');
    ?>
    <?php
    //Mostraremos un mensaje de bienvenida.
    if (isset($_COOKIE["usuario"])) {
        $usuario = $_COOKIE["usuario"];
        echo "<br><h2>Bienvenido, " . $_COOKIE["usuario"] . ":</h2>";
    }
    ?>

    <hr>
    <!-- El usuario podrá añadir elementos a su lista de deseo. -->
    <form action="?method=new" method="POST">
        <h5>Agregar objeto a la lista de deseos:</h5>
        <label for="lista">Selecciona un objeto:</label>
        <select name="lista" id="lista" required>
            <option value="Movil">Móvil</option>
            <option value="Coche">Coche</option>
            <option value="Consola">Consola</option>
            <option value="Ropa">Ropa</option>
            <option value="PC">PC</option>
            <option value="Tablet">Tablet</option>
        </select>
        <br><br>
        <input type="submit" name="agregar" value="Agregar">
    </form>
</body>

</html>