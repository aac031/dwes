<?php
/* Crea una lista usando etiquetas ul y li. 
La lista inicialmente estará vacía pero un formulario con un input servirá para añadir los elementos. 
Usa input de tipo hidden para que no "olvidar" los elementos ya añadidos a la lista. */

//Crearemos o reanudaremos la sesión...
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Si el usuario decide borrar la lista.
    //Se borrará la sesión.
    if (isset($_POST["borrar"])) {
        $_SESSION["lista"] = [];
        session_destroy();
        setcookie(session_name(), '', time() - 7200, '/');
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        //Se añadirá a la sesión los datos que se introduzcan.
        $item = $_POST["nombres"];
        $_SESSION["lista"][] = $item;
        //Se verá por pantalla la lista.
        echo "<pre>";
        print_r($_SESSION["lista"]);
        echo "</pre>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>

<body>
    <form name="formulario" action="" method="POST">
        <ul>
            <li>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombres[]" id="nombre1">
            </li>
        </ul>
        <!-- Enviaremos los elementos a añadir. -->
        <input type="submit" name="envio" value="Enviar">
        <!-- Borraremos todos los elementos. -->
        <input type="submit" name="borrar" value="Borrar lista">
        <input type="hidden" name="lista" value="">
    </form>
</body>

</html>