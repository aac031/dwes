<?php
if (isset($_POST["envio"])) {
    $idioma = $_POST["idioma"];
    $marca = $_POST["marca"];
    setcookie("primeraCookie", $idioma, time() + 500);
    setcookie("segundaCookie", $marca, time() + 500);

    echo "El valor de la cookie es: " . $_COOKIE["primeraCookie"];
    echo "<br>";
    echo "<br>El valor de la cookie es: " . $_COOKIE["segundaCookie"];
    echo "<br>";
    echo "<br>Nuḿero de cookies creadas: " . count($_COOKIE);
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="3; url='http://ejercicios.local/ejercicio19_10.html'" />
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['envio'])) {

        //boton radio
        if (isset($_POST["envio"])) {
            $idioma = $_POST["idioma"];
            switch ($idioma) {
                case "es":
                    echo "<br>Tu idioma es: " . $idioma;
                    echo "<br>";
                    echo "<br><h1>Buenas :)</h1>";
                    echo "<br>";
                    break;

                case "en":
                    echo "<br>Tu idioma es: " . $idioma;
                    echo "<br>";
                    echo "<br><h1>Welcome :O</h1>";
                    echo "<br>";
                    break;

                case "de":
                    echo "<br>Tu idioma es: " . $idioma;
                    echo "<br>";
                    echo "<br><h1>Willkommen :D</h1>";
                    echo "<br>";
                    break;

                default:
                    echo "<br>Tu idioma es: " . $idioma;
                    echo "<br>";
                    echo "<br><h1>Buenas :)</h1>";
                    echo "<br>";
                    break;
            }
        }

        //boton radio
        if (isset($_POST["envio"])) {
            $marca = $_POST["marca"];
            if (!empty($marca)) {
                echo "<br> Tu marca de coche preferido es: " . $marca;
                echo "<br>";
            } else {
                echo "<br> No ha elegido ninguna marca de coche.";
                echo "<br>";
            }
        }
    }
    ?>
</body>

</html>