<?php
/* Ejercicio_09: Repite el ejercicio 7 añadiendo los elementos al array de uno en uno. */
/* Comprobamos que recibe los datos. */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        /* Iniciamos una sesión para guardas la lista. */
        session_start();
        $pais = $_POST["lista"];
        /* Lo que el usuario selecciona se irá añadiendo a la lista. */
        $_SESSION["listaPaises"][] = $pais;
        echo "<pre>";
        /* Mostramos la lista por pantalla. */
        print_r($_SESSION["listaPaises"]);
        echo "</pre>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países</title>
</head>

<body>
    <!-- Creamos un select para que el usuario seleccione el país que desea añadir al array. -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <select name="lista" id="lista" required>
            <option value="Espagna">España</option>
            <option value="Alemania">Alemania</option>
            <option value="Francia">Francia</option>
            <option value="Portugal">Portugal</option>
        </select>
        <br><br>
        <input type="submit" name="envio" value="Agregar país">
    </form>
</body>

</html>