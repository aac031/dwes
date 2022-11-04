<?php
session_start();
if (!isset($_SESSION['color'])) {
    header("Location: ?method=colores");
} else {
    $color = $_SESSION['color'];
    echo "<body style='background-color: $color'>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Bievenido</h1>
    <hr>
    <form action="?method=colores" method="POST">
        <input type="submit" value="Cambiar Color">
    </form>
</body>

</html>