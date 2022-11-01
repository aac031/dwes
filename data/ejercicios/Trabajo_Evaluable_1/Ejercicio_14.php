<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form name="formulario" action="" method="POST">
        <p>
            <label for="operando1">Operando 1: </label>
            <input type="number" name="operando1" id="operando1">
        </p>
        <p>
            <select name="operador">
                <option value="Sumar">Sumar [ + ]</option>
                <option value="Restar">Restar [ - ]</option>
                <option value="Multiplicar">Multiplicar [ x ]</option>
                <option value="Dividir">Dividir [ / ]</option>
            </select>
        </p>
        <p>
            <label for="operando2">Operando 2: </label>
            <input type="number" name="operando2" id="operando2">
        </p>
        <input type="submit" name="enviar" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["enviar"]) && !empty($_POST["enviar"])) {
            $operador = $_POST["operador"];
            $num1 = $_POST["operando1"];
            $num2 = $_POST["operando2"];

            switch ($operador) {
                case $operador == "Sumar":
                    echo "<br>Resultado: " . ($num1 + $num2);
                    break;
                case $operador == "Restar":
                    echo "<br>Resultado: " . ($num1 - $num2);
                    break;
                case $operador == "Multiplicar":
                    echo "<br>Resultado: " . ($num1 * $num2);
                    break;
                case $operador == "Dividir":
                    echo "<br>Resultado: " . ($num1 / $num2);
                    break;
                default:
                    echo "<br>Datos no válidos.";
                    break;
            }

            echo "<a href=\"Ejercicio_14.php\"><br><br>Limpiar...</a>";
        }
    }
    ?>
</body>

</html>