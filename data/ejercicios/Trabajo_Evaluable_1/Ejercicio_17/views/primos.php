<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Primos</title>
</head>

<body>
    <?php
    require('views/header.php');
    ?>
    <h1>Números primos en <?= $this->name ?></h1>
    <hr>
    <h3>Números primos entre 1 y 10000:</h3>
    <hr>
    <?php
    function esPrimo($num)
    {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    for ($i = 2; $i <= 10000; $i++) {
        if (esPrimo($i)) {
            echo $i . " ";
        }
    }
    ?>
    <hr>
</body>

</html>