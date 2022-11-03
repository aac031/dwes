<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Potencias</title>
</head>

<body>
    <?php
    require('views/header.php');
    ?>
    <h1>Potencias en <?= $this->name ?></h1>
    <hr>
    <h3>Potencias de 2⁰ hasta 2²⁴:</h3>
    <?php
    $potencias = [];
    for ($pot = 0; $pot <= 24; $pot++) {
        $resultado = pow(2, $pot);
        $potencias[] = $resultado;
        echo "Potencia de 2<sup>" . $pot . "</sup> = " . $resultado . "<br>";
    }
    ?>
    <hr>
</body>

</html>