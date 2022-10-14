<?php

$nombrefich = "modulodwes.txt";
$fp = fopen($nombrefich, "r"); //True si no hay problemas.

if (!$fp) {
    echo "<br>No he podido leer el fichero.";
} else {
    //Leer el fichero.
    //1- Caracter a caracter: funcion fgetc
    /*
            while(!feof($fp)){
                $caracter = fgetc($fp);
                if($caracter == "\n"){
                    echo "<br>";
                }
                echo $caracter;
            } */
    //2- Leyendo linea a linea
    /*
            while(!feof($fp)){
                $linea = fgets($fp);
                echo $linea . "<br>";
            }*/
    //3- Fread
    $contenido = fread($fp, filesize($nombrefich));
    print_r($contenido);
}
echo "<br>Cerrando el fichero...";
fclose($fp);

$fp = fopen($nombrefich, "a");
if (!$fp) {
    echo "<br>No he podido leer el fichero.";
} else {
    fwrite($fp, "Esta es otra linea." . PHP_EOL);
}
fclose($fp);
