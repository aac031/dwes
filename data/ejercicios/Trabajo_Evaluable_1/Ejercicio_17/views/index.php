<!-- Crea una aplicación web con una clase App y varios métodos. 
En todos los casos se trata de obtener una serie numérica. 
El método debe calcular la serie y guardarla en un array, después hay que incluir una vista que muestre la serie. 
Puede ser que necesites crear métodos auxiliares (private) para el cálculo del array, por ejemplo: esPrimo(). 
Los métodos necesarios son:
    - Index (index). Presentación de la App y enlaces.
    - Fibonacci (fibonacci). Muestra la serie de Fibonacci. Debe mostrar todos los términos menores a un millón.
    - Potencias de 2 (potencias2). Debe mostrar los valores de las potencias de 2 hasta 2 elevado a 24 (nº de colores True Color, por ejemplo).
    - Factorial (factoriales). Debe mostar los factoriales desde 1 hasta n de tal manera que el último término sea el más próximo cercano al millón.
    - Nº. primos (primos). Debe encontrar los números primos entre 1 y 10.000. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Bienvenida</title>
</head>

<body>
    <!-- LLamará la cabecera... -->
    <?php
    require('views/header.php');
    ?>
    <!-- Muestra mensaje de bienvenida a la aplicación. -->
    <h1>Bienvenido a <?= $this->name ?></h1>
    <hr>
</body>

</html>