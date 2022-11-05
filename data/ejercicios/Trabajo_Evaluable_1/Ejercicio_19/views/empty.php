<?php
//Comprobamos la sesión
session_start();
if (isset($_POST["eliminarTodo"])) {
    //Como creamos una sesión para crear la lista de deseos, 
    //bastará con eliminar la sesión para eliminar toda la lista.
    $_SESSION["listaDeseos"] = [];
    session_destroy();
    setcookie(session_name(), '', time() - 7200, '/');
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
    <h3>Lista de deseos:</h3>
    <?php
    //Mostramos la lista por pantalla.
    echo "<pre>";
    print_r($_SESSION["listaDeseos"]);
    echo "</pre>";
    ?>
    <h5><b>La lista de deseos ha sido eliminada exitosamente.</b></h5>
    <br>
    <!-- Si el usuario quiere añadir un objeto, podrá hacerlo. -->
    <p>
        <form action="?method=home" method="POST">
            <input type="submit" name="otroObjeto" value="Añadir objeto a la lista">
        </form>
    </p>
</body>

</html>