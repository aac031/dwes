<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["borrar"])) {
        $_SESSION["lista"] = [];
        session_destroy();
        setcookie(session_name(), '', time() - 7200, '/');
        echo "<pre>";
        print_r($_SESSION["lista"]);
        echo "</pre>";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        $item = $_POST["nombres"];
        $_SESSION["lista"][] = $item;
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
    <title>Document</title>
</head>

<body>
    <form name="formulario" action="" method="POST">
        <ul>
            <li>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombres[]" id="nombre1">
            </li>
        </ul>

        <input type="submit" name="envio" value="Enviar">
        <input type="submit" name="borrar" value="Borrar lista">
        <input type="hidden" name="lista" value="">
    </form>
</body>

</html>