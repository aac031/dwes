<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Multiplicación</title>
</head>

<body>
    <h1>Tabla Multiplicación</h1>
    <?php
    if (isset($_POST['envio'])) {
        if (!empty($_POST['numero'])) {
            $tabla = $_POST['numero'];
            for ($tabla = 1; $tabla <= 10; $tabla++) {
                echo 'Tabla del ' . $tabla . '<br />';
                for ($x = 1; $x <= 10; $x++) {
                    echo '[ ' . $tabla . ' * ' . $x . ' = ' . $tabla * $x . ' ] ';
                }
                echo '<hr />';
            }
        } else {
            echo "<br><h3>No has introducido ninguna edad.</h3>";
        }
    }
    ?>
</body>

</html>