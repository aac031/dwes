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
    <?php

    function fibonacci($n)
    {
        $fibonacci = [0, 1];

        for ($i = 2; $i <= $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        echo "Resultado: " . $fibonacci[$n];
    }

    fibonacci(100);
    ?>
    <hr>
</body>

</html>