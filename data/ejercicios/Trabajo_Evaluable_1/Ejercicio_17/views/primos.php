<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Primos</title>
</head>

<body>
    <!-- LLamará la cabecera... -->
    <?php
    require('views/header.php');
    ?>
    <!-- Indicará al usuario donde se encuentra... -->
    <h1>Números primos en <?= $this->name ?></h1>
    <hr>
    <h3>Números primos entre 1 y 10000:</h3>
    <hr>
    <?php
    //Creamos la función 'esPrimo' para saber si un número es primo o no.
    function esPrimo($num)
    {
        //Creamos el bucle for para recorrer todos los números hasta $num
        //y comprobamos si es primo (si el resto es 0 no será primo) o no.
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    //El número 1 es especial asi que lo dejamos de lado.
    //Desde 2 hasta 10000...
    for ($i = 2; $i <= 10000; $i++) {
        //Llamamos a la función 'esPrimo' y comprobamos que números son primos.
        if (esPrimo($i)) {
            //Mostramos todos los valores.
            echo $i . " ";
        }
    }
    ?>
    <hr>
</body>

</html>