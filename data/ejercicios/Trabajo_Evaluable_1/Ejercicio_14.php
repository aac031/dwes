<!-- Ejercicio_14: Crea un formulario que funcione como calculadora. 
Debe contener dos input como operandos y un select para elegir operador.
- Si se reciben los datos muestra el resultado.
- Si no son válidos o no existen debe mostrar de nuevo el formulario de calculadora. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form name="formulario" action="" method="POST">
        <!-- El usuario introducira el operando 1. -->
        <p>
            <label for="operando1">Operando 1: </label>
            <input type="number" name="operando1" id="operando1">
        </p>
        <!-- El usuario seleccionará el operador. -->
        <p>
            <select name="operador">
                <option value="Sumar">Sumar [ + ]</option>
                <option value="Restar">Restar [ - ]</option>
                <option value="Multiplicar">Multiplicar [ x ]</option>
                <option value="Dividir">Dividir [ / ]</option>
            </select>
        </p>
        <!-- El usuario introducira el operando 2. -->
        <p>
            <label for="operando2">Operando 2: </label>
            <input type="number" name="operando2" id="operando2">
        </p>
        <input type="submit" name="enviar" value="Calcular">
    </form>

    <?php
    //Comprobramos si los datos han sido enviados...
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["enviar"]) && !empty($_POST["enviar"])) {
            //Variable para el operador...
            $operador = $_POST["operador"];
            //Variable para el operando 1...
            $num1 = $_POST["operando1"];
            //Variable para el operando 2...
            $num2 = $_POST["operando2"];

            // Creamos un switch para el operador.
            // Dependiendo de lo que haya seleccionada el usuario
            // se realizará una operación u otra.
            switch ($operador) {
                    //caso Suma.
                case $operador == "Sumar":
                    echo "<br>Resultado: " . ($num1 + $num2);
                    break;
                    //caso Resta.
                case $operador == "Restar":
                    echo "<br>Resultado: " . ($num1 - $num2);
                    break;
                    //caso Multiplicación.
                case $operador == "Multiplicar":
                    echo "<br>Resultado: " . ($num1 * $num2);
                    break;
                    //caso División.
                case $operador == "Dividir":
                    echo "<br>Resultado: " . ($num1 / $num2);
                    break;
                default:
                    echo "<br>Datos no válidos.";
                    break;
            }
            //Limpiamos los resultados...
            echo "<a href=\"Ejercicio_14.php\"><br><br>Limpiar...</a>";
        }
    }
    ?>
</body>

</html>