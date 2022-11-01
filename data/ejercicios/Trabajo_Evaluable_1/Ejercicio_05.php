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
    <h5>Sus divisores son:</h5>
    <?php
    if (isset($_POST['envio'])) {
        if (!empty($_POST['numero'])) {
            if ($_POST['numero'] != 0) {
                $totalDiv = 0;
                for ($num = 1; $num <= $_POST['numero']; $num++) {
                    if ($_POST['numero'] % $num == 0) {
                        $totalDiv++;
                        echo "(" . $num . ")" . "<br>";
                    }
                }
                if ($totalDiv <= 2) {
                    echo "<h5>El número tiene 1 o 2 divisores.</h5>";
                    echo "<h5>Por lo cual, es primo.</h5>";
                }
            } else {
                echo "<h5>Intenta con un número distinto a 0.</h5>";
            }
        }
    }
    ?>
</body>

</html>