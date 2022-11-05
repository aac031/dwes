<!-- Ejercicio_19: 
Se trata de crear una lista de deseos Usaremos la clase App con los siguietens métodos:

login método que muestra formulario de entrada.

auth método que toma el nombre de usuario tras el login. Tras hacer esto reenvía a home.

home método que muestra la lista de deseos. Además muestra un formulario de nuevos deseos. El formulario envía al método new

new toma el nuevo deseo y lo incluye en la lista.

delete borra un deseo de la lista. Debe recibir el indice del deseo.

empty vacía la lista de deseos.

close Cierra sesión: borra la cookie. -->

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
    <!-- El usuario se logeará, para hacer un logeo correcto:
    usuario => usuario 
    password => 1234 -->
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