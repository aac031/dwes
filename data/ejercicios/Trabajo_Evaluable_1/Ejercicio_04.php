<?php
/*  Imprimir los primeros 10 números de la sucesión de fibonacci. 
La sucesión comienza con los números 0 y 1; 2​ a partir de estos, 
«cada término es la suma de los dos anteriores» */

/* La serie comenzará con los número 0 y 1, 
por eso creamos estas dos variables.*/
$num1 = 0;
$num2 = 1;

echo "<b>Sucesión de Fibonacci hasta el número 10:</b>";
echo "<br><br>";

echo $num1 . "<br>";
/* Como nos piden que serie Fibonacci sea hasta el 10,
haremos un bucle que sea hasta el 10. */
for ($i = 0; $i < 10; $i++) {
    /* $suma será igual a 0 al principio. */
    $suma = $num1;
    /* $num1 pasará a ser $num2. */
    $num1 = $num2;
    /* $num2 será la suma de los dos anteriores. */
    $num2 = $suma + $num1;
    echo $num1 . "<br>";
}
