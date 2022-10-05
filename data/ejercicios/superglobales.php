<?php
    $mihost = $_SERVER["HTTP_HOST"];
    echo "<br>El host al que va la peticion es: " . $mihost;

    $mihostname = $_SERVER["SERVER_NAME"];
    echo "<br> El nombre del servidor web es: " . $mihostname;

    $mihostlanguage = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
    echo "<br> El lenguaje del servidor es: " . $mihostlanguage;

    $mihostactualpage = $_SERVER["PHP_SELF"];
    echo "<br> El nombre de la página actual que realiza la solicitud: " . $mihostactualpage;

    $mihostbrowser = $_SERVER["HTTP_USER_AGENT"];
    echo "<br> El tipo de navegador que realiza la solicitud: " . $mihostbrowser;

/* Mostrar aqui:
    - el nombre del servidor web
    - el lenguaje
    - el nombre de la pagina actual que realiza la solicitud.
    - el tipo de navegador que realiza la solicitud.
*/