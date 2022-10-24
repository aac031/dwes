<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD=======>>>>>>> 036404401f0fa4e39a921890349a59df9a4f1e47

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Libro Registrado</title>
    </head>
    <<<<<<< HEAD <body>
        <h1>Libro Registrado</h1>
        <?php
        $verificar_usuario = 0;
        if (isset($_GET['envio'])) {
            if (!empty($_GET['nombrelibro'])) {
                $nombreLibro = $_GET['nombrelibro'];
                echo "<br>El nombre del libro introducido es: " . $nombreLibro;
            } else {
                echo "<br><h3>No has introducido ningún libro.</3>";
            }
            if (!empty($_GET['nombreautor'])) {
                $autorLibro = $_GET['nombreautor'];
                echo "<br>El autor del libro introducido es: " . $autorLibro;
            } else {
                echo "<br><h3>No has introducido ningún autor.</3>";
            }
            if (!empty($_GET['nombreedit'])) {
                $editorial = $_GET['nombreedit'];
                echo "<br>La editorial del libro es: " . $editorial;
            } else {
                echo "<br><h3>No has introducido ninguna editorial.</3>";
            }
            if (!empty($_GET['numpag'])) {
                $numPag = $_GET['numpag'];
                echo "<br>Los números de páginas son: " . $numPag;
            } else {
                echo "<br><h3>No has introducido números de páginas.</3>";
            }
        }
        ?>
        </body>

        =======

        <body>
            <h1>Libro Registrado</h1>
            <?php
            if (isset($_GET['envio'])) {
                if (!empty($_GET['nombrelibro'])) {
                    $nombreLibro = $_GET['nombrelibro'];
                    echo "<br>El nombre del libro introducido es: " . $nombreLibro;
                } else {
                    echo "<br><h3>No has introducido ningún libro.</3>";
                }
                if (!empty($_GET['nombreautor'])) {
                    $autorLibro = $_GET['nombreautor'];
                    echo "<br>El autor del libro introducido es: " . $autorLibro;
                } else {
                    echo "<br><h3>No has introducido ningún autor.</3>";
                }
                if (!empty($_GET['nombreedit'])) {
                    $editorial = $_GET['nombreedit'];
                    echo "<br>La editorial del libro es: " . $editorial;
                } else {
                    echo "<br><h3>No has introducido ninguna editorial.</3>";
                }
                if (!empty($_GET['numpag'])) {
                    $numPag = $_GET['numpag'];
                    echo "<br>Los números de páginas son: " . $numPag;
                } else {
                    echo "<br><h3>No has introducido números de páginas.</3>";
                }
            }
            ?>
        </body>
        >>>>>>> 036404401f0fa4e39a921890349a59df9a4f1e47

</html>