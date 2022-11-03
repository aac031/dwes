<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Factoriales</title>
</head>

<body>
    <?php
    require('views/header.php');
    ?>
    <h1>Factoriales en <?= $this->name ?></h1>
    <hr>
    <form action="" method="POST">
        <p>
            <label for="">Número: </label>
            <input type="number" name="numero" id="numero" required>
        </p>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <?php
    function factorial($num)
    {
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial = $factorial * $i;
        }
        return $factorial;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST) && !empty($_POST)) {
            $num = $_POST["numero"];
            $resultado = factorial($num);
            echo "El factorial de " . $num . " es igual a: " . $resultado;
        }
    }
    ?>
</body>

</html>