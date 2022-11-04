<?php
session_start();
if (isset($_POST["eliminarUno"])) {
    $_SESSION["listaDeseos"];
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
    if (isset($_POST["eliminarUno"])) {
        $_SESSION["listaDeseos"];
        echo "<pre>";
        print_r($_SESSION["listaDeseos"]);
        echo "</pre>";
    }
    ?>
    <?php
    if (isset($_POST["eliminar"])) {
        if (isset($_POST["number"])) {
            $_SESSION["listaDeseos"];
            $id = $_POST["number"];
            unset($_SESSION["listaDeseos"][$id]);
            echo "<pre>";
            print_r($_SESSION["listaDeseos"]);
            echo "</pre>";
        }
    }
    ?>
    <br>
    <form action="" method="POST">
        <p>
            <label for="number">Número: </label>
            <input type="number" name="number" id="number" required>
        </p>
        <input type="submit" name="eliminar" id="eliminar" value="Eliminar un objeto">
    </form>
    <br>
    <form action="?method=new" method="POST">
        <input type="submit" name="volver" value="Volver">
    </form>
</body>

</html>