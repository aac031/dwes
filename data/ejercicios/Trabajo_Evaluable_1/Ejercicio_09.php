<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        session_start();
        $pais = $_POST["lista"];
        $_SESSION["listaPaises"][] = $pais;
        $sesioncodif = json_encode($_SESSION);
        echo "<pre>";
        print_r($sesioncodif);
        echo "</pre>";

        $sesiondecodif = json_decode($sesioncodif, true);
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