<?php
   $var1 = 5;
   $var2 = "7";
   $var2 = (int)"7";

   $var3 = (string)8;
   $var4 = "";
   $var5;

    echo "Var1 es del tipo : " . gettype($var2) . "<br>";

    echo "<br>La variable 3 está definida ?" . isset($var3);
    echo "<br>La variable 4 está definida ?" . isset($var4);
    echo "<br>La variable 5 está definida ?" . isset($var5) . "<br>";

    echo "<br>La variable 3 está definida ?" . empty($var3);
    echo "<br>La variable 4 está definida ?" . empty($var4);
    echo "<br>La variable 5 está definida ?" . empty($var5) . "<br>";

    const MICONST = 100;

    define('OTRACONST',200);
    echo "<br>La constante es " . MICONST . "<br>";
   
    $num1 = 3;
    $num2 = 7;

    if($num1 <=> $num2){
        echo "<br>Son iguales.";
    } else {
        echo "<br>Son diferentes.";
    }

   /*
        variables: [A-Z, a-z, 0-9]
        - no pueden empezar con numeros ni con variables (@, #, ~, ?, ...).
    -----------------------------------------------------------------------
    TIPOS DE DATOS:
        - int, string, boolean, float.
        - arrays, objetos, ficheros.
        - Tipado de lenguaje de programación: 
            - Fuerte: JAVA.
            - Débil: PHP.
    Casesensitive:
        - JAVA -> Si
        - PHP -> A medias.
            - variables si. $MIVAR diferente de $mivar.
            - métodos no. METODO1 = metodo1.
    OPERADORES:
    =======================================================================
    =,     
        
   */

