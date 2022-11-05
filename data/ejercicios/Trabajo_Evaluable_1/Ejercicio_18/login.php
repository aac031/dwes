<?php
//Creamos o reanudamos la sesión...
session_start();
//Comprobamos si existe una sesión correcta ya realizada.
//Si la hay, nos redirigirá directamente a 'home.php'. 
//Si no la hay, estaremos en 'login.php'
if (!isset($_SESSION['login_ok'])) {
} else {
    header("Location: home.php");
}
?>
<!-- Ejercicio_18: 
    Vamos a crear una App con estos métodos:
        login: muestra un formulario de login (usuario y contraseña).
        auth: guarda el usuario y su contraseña en una cookie. Después reenvía la petición a home.
        home: Muestra un saludo y un enlace para cerrar sesión.
        logout: elimina las cookies (setcookie(...., time() - 1)) y reenvía a login.
    En login, comprueba que no hay ya un usuario. Si lo hay reenvía a home. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- El usuario se logeará, para hacer un logeo correcto:
    usuario => admin 
    password => 12345 -->
    <h2>Inicia sesión</h2>
    <form action="auth.php" method="POST">
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