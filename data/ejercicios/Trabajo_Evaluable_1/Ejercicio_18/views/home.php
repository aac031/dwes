<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Home</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["envio"])) {
            echo "<h3>Bienvenido, " . $_COOKIE["PrimeraCookie"] . "</h3>";
        }
    }

    ?>
    <form action="logout.php">
        <input type="submit" name="envio" value="Cerrar sesión">
    </form>
</body>

</html>