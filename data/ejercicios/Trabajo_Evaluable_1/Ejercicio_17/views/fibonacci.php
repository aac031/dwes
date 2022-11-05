<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Fibonacci</title>
</head>

<body>
    <!-- LLamará la cabecera... -->
    <?php
    require('views/header.php');
    ?>
    <!-- Indicará al usuario donde se encuentra... -->
    <h1>Fibonacci en <?= $this->name ?></h1>
    <hr>
    <!-- El usuario introducirá un número positivo para calcular la sucesión Fibonacci. -->
    <h3>Introduzca un número entero positivo:</h3>
    <form action="" method="POST">
        <p>
            <label for="">Número: </label>
            <input type="number" name="numero" id="numero" required>
        </p>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <?php
    //Creamos la función 'fibonacci' que se encargará de realizar la operación.
    function fibonacci($num)
    {
        //Creamos un array con los 2 primeros valors que aparecen
        //en todas las sucesiones de Fibonacci.
        $fibonacci = [0, 1];
        for ($i = 2; $i <= $num; $i++) {
            //La sucesión Fibonacci, comienza con 0 y 1,
            //luego cada siguiente número es el resultaado de la suma de los dos anteriores.
            //Por eso restamos a [$i-1] y a [$i-2] y luego los sumamos.
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        //Nos devuelve el valor...
        return $fibonacci[$num];
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST) && !empty($_POST)) {
            $num = $_POST["numero"];
            //El número introducido debe ser positivo para realizar la operación
            //Si no lo es mostrará un mensaje.
            if ($_POST["numero"] >= 0) {
                //LLamamos a la función y mostramos el resultado.
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