<?php
session_start();
if (isset($_POST["agregar"])) {
    $item = $_POST["lista"];
    $_SESSION["listaDeseos"][] = $item;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Lista de deseos</title>
</head>

<body>
    <?php
    require('header.php');
    ?>
    <hr>
    <h3>Lista de deseos: </h3>
    <?php
    echo "<pre>";
    print_r($_SESSION["listaDeseos"]);
    echo "</pre>";
    ?>
    <br>
    <p>
        <form action="?method=home" method="POST">
            <input type="submit" name="otroObjeto" value="Quiero más cosas...">
        </form>
    </p>
    <p>
        <form action="?method=delete" method="POST">
            <input type="submit" name="eliminarUno" value="Eliminar un objeto">
        </form>
    </p>
    <p>
        <form action="?method=empty" method="POST">
            <input type="submit" name="eliminarTodo" value="Eliminar toda la lista">
        </form>
    </p>
</body>

</html>