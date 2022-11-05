<?php
/* Ejercicio_03: Imprimir los números divisibles por 3 
desde el 1 hasta el 10  */

/* Creamos un array, dentro estarán los números del 1 al 10. */
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

/* Recorreremos $array con un foreach. */
echo "Números divisibles por 3 (1 al 10):";
echo "<br>";
foreach ($array as $numero) {
    /* Para que un número sea divisible por otro sabemos que su división
    debe de ser exacta, el resto debe de ser cero.
    Con el foreach comprobaremos que los números de $array son divisibles por 3. */
    if ($numero % 3 == 0) {
        /* Mostramos los números divisibles. */
        echo "[" . $numero . "]" . "<br>";
    }
}
