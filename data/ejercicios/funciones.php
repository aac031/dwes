<?php
    //variables globales
    $var1 = 6;
    $var2 = 7;

    //$a y $b son variables locales de la funcion
    function suma($a, $b){
        global $var1;
        global $var2;
        $var1 = 99;
        $var2 = 100;

        echo "<br>La variable DENTRO de la función var1 y var2 son: " . $var1 . " y " . $var2;
        
        //definicion variable estatica
        static $varestatica = 0;
        echo "<br>El valor de la variable estática es: " . $varestatica;
        $varestatica++;

        return $a + $b;
    }

    echo "<br>La variable a y b son: " . $a . " y " . $b;
    echo "<br>La variable FUERA de la funcion var1 y var2 son: " . $var1 . " y " . $var2;
    echo "<br>Llamada a suma 1 vez: " . suma(3,5);
    echo "<br>Llamada a suma 2 vez: " . suma(3,5);
    echo "<br>Llamada a suma 3 vez: " . suma(3,5);

    //paso de parametros por valor o por referencia(variable)
    function restar($var3, $var4){
        $var3--;
        echo "<br> var3 vale: " . $var3;
    }

    $var3 = 8;
    $var4 = 3;
    
    echo "<br>Llamada por valor: " . restar($var3, 6);