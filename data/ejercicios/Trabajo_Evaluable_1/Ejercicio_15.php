<!-- Ejercicio_15: Crea un formulario que envíe un array de 3 nombres. 
Para hacerlo debes usar el mismo nombre en todos los input (name="nombres[]").  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <!-- El usuario introduce los nombre que serán añadidos a "nombres[]"... -->
    <form name="formulario" action="" method="POST">
        <p>
            <label for="nombre1">Nombre 1:</label>
            <input type="text" name="nombres[]" id="nombre1">
        </p>
        <p>
            <label for="nombre2">Nombre 2:</label>
            <input type="text" name="nombres[]" id="nombre1">
        </p>
        <p>
            <label for="nombre3">Nombre 3:</label>
            <input type="text" name="nombres[]" id="nombre1">
        </p>
        <input type="submit" name="envio" value="Enviar">
    </form>
    <?php
    //Comprobramos si los datos han sido enviados...
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["nombres"]) && !empty($_POST["nombres"])) {
            $nombres = $_POST["nombres"];
            //Mostramos el array con los nombres introducidos...
            echo "<br>Array de nombres introducidos:";
            echo "<br><pre>";
            print_r($nombres);
            echo "</pre>";
        }
    }
    ?>
</body>

</html>