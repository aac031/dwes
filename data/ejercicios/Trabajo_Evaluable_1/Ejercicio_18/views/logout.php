<?php
setcookie($_COOKIE["PrimeraCookie"], "usuario", time() - 7200, '/');

header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Logout</title>
</head>

<body>

</body>

</html>