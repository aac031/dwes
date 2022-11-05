<?php
header('Refresh: 10; URL = /Trabajo_Evaluable_1/Ejercicio_05/formulario.html');
/* Usaremos "Refresh: 10" en header para mostrar sus divisores o si es primo
    durante 10 segundos, después de ese tiempo se regresará
    a la página de introducción de número. */
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
    /* Primero comprobamos si 'numero' ha sido recibido correctamente. */
    if (isset($_POST['envio'])) {
        if (!empty($_POST['numero'])) {
            /* Crearemos una variable para contar los divisores de un número,
            esta variable nos ayudará para saber si es primo o no.*/
            $totalDiv = 0;
            echo "<h5>Sus divisores son:</h5>";
            /* Calcularemos todos los divisores que tendrá el número recibido,
            y los contaremos. También mostraremos por pantalla el resultado. */
            for ($num = 1; $num <= $_POST['numero']; $num++) {
                if ($_POST['numero'] % $num == 0) {
                    $totalDiv++;
                    echo "[" . $num . "]" . "<br>";
                }
            }
            /* Sabemos que un número es primo si tiene 1 o 2 divisores,
            la variable $totalDiv nos ayudará con esto.*/
            if ($totalDiv <= 2) {
                echo "<h5>El número tiene 1 o 2 divisores.</h5>";
                echo "<h5>Por lo cual, es primo.</h5>";
            }
        }
    }
    ?>
</body>

</html>