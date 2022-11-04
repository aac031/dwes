<?php
if (isset($_COOKIE["color"])) {
    include 'cambio.php';
    $color = $_COOKIE['color'];
    echo "<body style='background-color:$color'>";
} else {
    header("Location: ?method=colores");
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