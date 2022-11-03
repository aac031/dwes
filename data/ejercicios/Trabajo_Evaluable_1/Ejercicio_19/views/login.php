<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Login</title>
</head>

<body>
    <h2>Inicia sesión</h2>
    <hr>
    <form action="?method=auth" method="POST">
        <br>
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" name="envio" value="Acceder">
    </form>
</body>

</html>