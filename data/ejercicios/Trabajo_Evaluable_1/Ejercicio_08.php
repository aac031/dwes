<!-- Ejercicio_08: Repite el ejercicio 6 añadiendo los elementos al array
de uno en uno.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_08</title>
</head>

<body>
    <h4>Lista de jugadores</h4>
    <hr>
    <form action="" method="POST">
        <input type="text" name="nombres[]">
        <input type="submit" value="Añadir jugador">
        <br>
        <?php
        /* Recibimos los valores introducidos. */
        if (isset($_POST['nombres'])) {
            foreach ($_POST['nombres'] as $nombre) {
                /* Mostramos la lista de nombres. */
                echo '<ul><li>';
                echo '<input type="text" name="nombres[]" value="' . $nombre . '"><br>';
                echo '</li></ul>';
            }
        }
        ?>
    </form>
</body>

</html>