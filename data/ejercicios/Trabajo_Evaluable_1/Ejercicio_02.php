<?php
header('Refresh: 10; URL = /Trabajo_Evaluable_1/Ejercicio_02.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Multiplicación</title>
</head>

<body>
    <h2>Tabla Multiplicación</h2>
    <hr>
    <?php
    if (isset($_POST['envio'])) {
        if (!empty($_POST['numero'])) {
<<<<<<< HEAD
            for ($variable1 = $_POST['numero']; $variable1 <= $_POST['numero']; $variable1++) {
                echo "Tabla del " . $variable1 . ":";
                for ($variable2 = 1; $variable2 <= 10; $variable2++) {
                    echo "<br>" . "(" . $variable1 . " x " . $variable2 . " = " . $variable1 * $variable2 . ")";
=======
            $tabla = $_POST['numero'];
            for ($tabla = 1; $tabla <= 10; $tabla++) {
                echo 'Tabla del ' . $tabla . '<br />';
                for ($x = 1; $x <= 10; $x++) {
                    echo '[ ' . $tabla . ' * ' . $x . ' = ' . $tabla * $x . ' ] ';
>>>>>>> 3d71e94effc09d2a4e93e04dface064f7d5903aa
                }
                echo "<hr>";
            }
        }
    }
    ?>
</body>

</html>