<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Potencias</title>
</head>

<body>
    <!-- LLamará la cabecera... -->
    <?php
    require('views/header.php');
    ?>
    <!-- Indicará al usuario donde se encuentra... -->
    <h1>Potencias en <?= $this->name ?></h1>
    <hr>
    <h3>Potencias de 2⁰ hasta 2²⁴:</h3>
    <?php
    //Creamos un array donde se introducirán los resultado 
    //de la potencia de 2⁰ hasta 2²⁴.
    $potencias = [];
    for ($pot = 0; $pot <= 24; $pot++) {
        //Con 'pow' calcularemos las potencias.
        $resultado = pow(2, $pot);
        $potencias[] = $resultado;
        //Mostramos el resultado.
        echo "Potencia de 2<sup>" . $pot . "</sup> = " . $resultado . "<br>";
    }
    ?>
    <hr>
</body>

</html>