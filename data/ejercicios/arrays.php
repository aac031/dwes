<?php
    $miarray = array(1,"hola", 3.0, false);

    echo "Elemento 2 de in array: " . $miarray[2];

    foreach($miarray as $elmto){
        echo "<br>El elemento es: " . $elmto;
    }

    echo "<br>";
    print_r($miarray);

    echo "<br>";
    var_dump($miarray);

    echo "<br>Longitud del array:" . count($miarray);

    $array2 = [
        3,
        2,
        5,
        9
    ];

    foreach($array2 as $elto){
        $elto = $elto * 2;
        echo "<br>Valor de elto: " . $elto;
    }
    print_r($array2);

    $array2 [] = 15;
    echo "<br>";
    print_r($array2);
    echo "<br>";

    unset($array2[2]);
    print_r($array2);
    echo "<br> y la posición 2? : " . $array2[2];

    $array2[] = 99;
    echo "<br>";
    print_r($array2);
    $array2[2] = 13;
    echo "<br>";
    print_r($array2);

    echo "<br>";
    echo "<br> y QUE DEMONIOS TIENE la posicion 2? : " . $array2[2];

    echo "<br>";
    echo "<br> MOSTRAR CLAVE Y VALOR DE ARRAY: ";
    foreach($array2 as $k => $v){
        echo "<br> Clave: " . $k . " y Valor: " . $v;
    }

    $persona = array(
        "edad" => 1,
        "peso" => 75,
        "casado" => false,
        "dni" => "78451122",
        5 => "nss"
    );

    echo "<br>";
    foreach($persona as $key => $value){
        echo "<br> Clave: " . $key . " y Valor: " . $value;
    }

    echo "<br>";
    print_r($persona);

    $persona[] = 7;
    echo "<br>";
    print_r($persona);

    $persona[4] = "natacion";
    echo "<br>";
    print_r($persona);

    echo "<br>El dni es: " . $persona["dni"];

    //arrays multidimensionales:
    $arrm = [
        0 => [1,3],
        1 => [5,7,9],
    ];

    echo "<br> Debe salir 3: " . $arrm[0][1];
?>