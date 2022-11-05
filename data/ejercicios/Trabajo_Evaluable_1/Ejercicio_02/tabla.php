<?php
header('Refresh: 10; URL = formulario.html');
/* Usaremos "Refresh: 10" en header para mostrar la tabla de multiplicación
    durante 10 segundos, después de ese tiempo se regresará
    a la página de introducción de número. */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Multiplicación</title>
</head>

<body>
    <!-- Mostraremos la tabla de multiplicación del número recibido. -->
    <h2>Tabla Multiplicación</h2>
    <hr>
    <?php
    /* Comprobamos que el numero ha sido recibido. */
    if (isset($_POST['envio'])) {
        if (!empty($_POST['numero'])) {
            /* La variable $num será el número recibido. */
            for ($num = $_POST['numero']; $num <= $_POST['numero']; $num++) {
                echo "Tabla del " . $num . ":";
                /* $num se multiplicara por la variable $num2, 
                $num2 serán los números (1 al 10), los cuales serán
                multiplicados por el número recibido ($num) */
                for ($num2 = 1; $num2 <= 10; $num2++) {
                    /* Mostramos las multiplicaciones */
                    $producto = $num * $num2;
                    echo "<br>" . "(" . $num . " x " . $num2 . " = " . $producto . ")";
                }
                echo "<hr>";
            }
        }
    }
    ?>
</body>

</html>