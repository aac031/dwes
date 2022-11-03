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
    <form action="">
        <input type="text" name="nombres[]">
        <input type="submit" value="Añadir jugador">
        <br>
        <?php
        if (isset($_GET['nombres'])) {
            foreach ($_GET['nombres'] as $nombre) {
                echo '<ul><li>';
                echo '<input type="text" name="nombres[]" value="' . $nombre . '"><br>';
                echo '</li></ul>';
            }
        }
        ?>
    </form>
</body>

</html>