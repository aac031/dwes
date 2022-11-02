<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>
    <?php
    require('views/header.php');
    ?>
    <h1>Fibonacci en <?= $this->name ?></h1>
    <hr>
    <h3>Introduzca un número entero positivo: </h3>
    <form action="" method="POST">
        <p>
            <label for="numero">Número: </label>
            <input type="number" name="numero" id="numero" required>
        </p>

        <input type="submit" value="Enviar">
    </form>
    <hr>
    <?php
    function fibonacci($num)
    {
        $fibonacci = [0, 1];

        for ($i = 2; $i <= $num; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return $fibonacci[$num];
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST) && !empty($_POST)) {
            $num = $_POST["numero"];
            if ($_POST["numero"] >= 0) {
                $resultado = fibonacci($num);
                echo "Resultado: " . $resultado;
            } else {
                echo "<b>El número introducido debe ser positivo.</b>";
            }
        }
    }
    ?>
    <hr>
</body>

</html>