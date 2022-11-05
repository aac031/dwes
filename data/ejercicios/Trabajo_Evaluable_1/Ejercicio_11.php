<!-- Ejercicio_11: Crea un formulario para enviar los datos 
de registro de un libro: título, autor, editorial, páginas.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar libro</title>
</head>

<body>
    <!-- Enviar datos de registro de un libro. 
    Y luego mostrarlos por pantalla. -->
    <hr>
    <h1>Registro de libro</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <p>
            <label for="titulo">Título: </label>
            <input type="text" name="Titulo" id="titulo" required>
        </p>

        <p>
            <label for="autor">Autor: </label>
            <input type="text" name="Autor" id="autor" required>
        </p>

        <p>
            <label for="editorial">Editorial: </label>
            <input type="text" name="Editorial" id="editorial" required>
        </p>

        <p>
            <label for="paginas">Páginas: </label>
            <input type="number" name="Paginas" id="paginas" required>
        </p>

        <input type="submit" value="Enviar">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST) && !empty($_POST)) {
            echo "<b>Datos Introducidos:</b>";
            /* Mostramos los datos introducidos. */
            echo "<pre>";
            print_r($_POST);
            echo "<br>";
            /* Volvemos al inicio para introducir otros datos. */
            echo "<a href=\"Ejercicio_11.php\">Introduce otros datos...</a>";
        }
    }
    ?>
</body>

</html>