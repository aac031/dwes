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
    $sesioncodif = json_encode($_SESSION);
    print_r($sesioncodif);
    ?>
    <br>
    <p>
        <form action="?method=home" method="POST">
            <input type="submit" name="otroObjeto" value="Quiero más cosas...">
        </form>
    </p>
</body>

</html>