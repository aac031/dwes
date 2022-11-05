<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Factoriales</title>
</head>

<body>
    <!-- LLamará la cabecera... -->
    <?php
    require('views/header.php');
    ?>
    <!-- Indicará al usuario donde se encuentra... -->
    <h1>Factoriales en <?= $this->name ?></h1>
    <hr>
    <!-- El usuario introducirá un número positivo para calcular su factorial. -->
    <form action="" method="POST">
        <p>
            <label for="">Número: </label>
            <input type="number" name="numero" min="0" id="numero" required>
        </p>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <?php
    // Creamos la funcion 'factorial' para calcular el factorial
    // del valor introducido por el usuario.
    function factorial($num)
    {
        //Para calcular el factorial debemos multiplicar
        //todos los número enteros y positivos entre el número
        //introducido y el número uno. Para calcular el factorial
        //en esta ocasión lo haremos con el bucle for, que hará
        //la multiplicación de todos los números entre el número introducido
        //por el usuario y uno.

        //Inicializamos la variable.
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial = $factorial * $i;
        }
        //Nos regresa la variable.
        return $factorial;
    }

    //Recibirá el número introducido.
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST) && !empty($_POST)) {
            $num = $_POST["numero"];
            // Llamamos a la función para realizar la operación.
            $resultado = factorial($num);
            // Mostramos el resultado.
            echo "El factorial de " . $num . " es igual a: " . $resultado;
        }
    }
    ?>
</body>

</html>