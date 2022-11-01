<?php
header('Refresh: 10; URL = /Trabajo_Evaluable_1/Ejercicio_05.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>

<body>
    <h2>Divisores</h2>
    <hr>
    <?php

    $numero = $_POST['numero'];

    function esPrimo($numero)
    {
        for ($i = 2; $i <= $numero; $i++) {
            if (($numero % $i) == 0) {
                return false;
            }
        }
        return true;
    }

    if (esPrimo($numero)) {
        echo "Es primo.";
    } else {
        echo "No es primo.";
    }
    ?>
</body>

</html>