<?php

include_once "asignaturas.php";
include_once "modulo.php";

echo "<h1>WEB DE ASIGNATURAS</h1>";
$bbdd = new Asignatura("BBDD", 6);
Asignatura::setCiclo("DAM");
echo "<br>" . $bbdd;
echo "<br>BBDD pertenece al ciclo: " . Asignatura::getCiclo();

$dwes = new Modulo("DWES", 9, "IFC3014");
Modulo::setCiclo("DAW");
echo "<br> " . $dwes;
echo "<br> DWES pertenece al ciclo " . Modulo::getCiclo();
