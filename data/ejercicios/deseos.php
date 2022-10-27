<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        session_start();
        $item = $_POST["lista"];
        $_SESSION["listadeseo"][] = $item;
        $sesioncodif = json_encode($_SESSION);
        var_dump($sesioncodif);

        $sesiondecodif = json_decode($sesioncodif, true);
        //var_dump($sesiondecodif);

        $sesiondecodif = json_decode($sesiondecodif);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista deseos</title>
</head>

<body>
    <h1>Lista de deseos</h1>
    <h3>Hoy me apetece comprar...</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <select name="lista" id="lista" required>
            <option value="camisa">Camisa</option>
            <option value="cortacesped">Cortacesped</option>
            <option value="consola">PS5</option>
            <option value="pantalon">Pantalón</option>
            <option value="movil">Xioami</option>
            <option value="coche">Lexus</option>
            <option value="portatil">Lenovo</option>
            <option value="procesador">Intel</option>
        </select>
        <br><br>
        <input type="submit" name="envio" value="Agregar objeto">
    </form>
</body>

</html>