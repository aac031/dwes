<?php
//Comprobamos la sesión...
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
    //Mostramos el header...
    require('header.php');
    ?>
    <hr>
    <h3>Lista de deseos: </h3>
    <?php
    //Si el usuario seleccionó la opción de eliminar un objeto de la lista
    //Podrá ver que objetos hay en la lista.
    if (isset($_POST["eliminarUno"])) {
        $_SESSION["listaDeseos"];
        echo "<pre>";
        print_r($_SESSION["listaDeseos"]);
        echo "</pre>";
    }
    ?>
    <?php
    //Cogeremos el numero enviado por el usuario
    //Con ese número eliminaremos el objeto que está en esa posición.
    if (isset($_POST["eliminar"])) {
        if (isset($_POST["number"])) {
            $_SESSION["listaDeseos"];
            $id = $_POST["number"];
            //Con 'unset' eliminaremos el objeto que está en la posición.
            unset($_SESSION["listaDeseos"][$id]);
            //Mostramos la lista...
            echo "<pre>";
            print_r($_SESSION["listaDeseos"]);
            echo "</pre>";
        }
    }
    ?>
    <br>
    <form action="" method="POST">
        <!-- Se le pedirá al usuario que elemento quiere eliminar. -->
        <p>
            <label for="number">Número del objeto: </label>
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