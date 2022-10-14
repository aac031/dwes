<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

=======
>>>>>>> 036404401f0fa4e39a921890349a59df9a4f1e47
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoriza</title>
</head>
<<<<<<< HEAD

=======
>>>>>>> 036404401f0fa4e39a921890349a59df9a4f1e47
<body>
    <h1>Página de cheque de credenciales.</h1>
    <h2>Si has llegado aqui eres un héroe.</h2>
    <?php
<<<<<<< HEAD
    if (isset($_GET['envio'])) {
        if (!empty($_GET['nombreusu'])) {
            $usuario = $_GET['nombreusu'];
            echo "<br>El nombre del usuario introducido es: " . $usuario;
        } else {
            echo "<br><h3>No has introducido ningún usuario.</3>";
        }
        if (!empty($_GET['passwd'])) {
            $password = $_GET['passwd'];
            echo "<br>La contraseña introducida es: " . $password;
        } else {
            echo "<br><h3>No has introducido ninguna contraseña.</3>";
        }
    }

    //Recogemos valores checkbox... 
    if (isset($_GET["envio"])) {
        //checkbox
        if (!empty($_GET['asignaturas'])) {
            $asignaturas = $_GET['asignaturas'];
            foreach ($asignaturas as $asignatura) {
                echo "<br>Te encanta el módulo: " . $asignatura;
            }
        } else {
            echo "<br>No te gusta la programación.";
        }

        //boton radio
        if (isset($_GET["envio"])) {
            $equipobasket = $_GET["equipo"];
            if (!empty($equipobasket)) {
                echo "<br> Tu equipo de basket preferido es: " . $equipobasket;
            } else {
                echo "<br> No ha elegido ningún equipo.";
            }
        }

        //lista desplegable una opción
        if (isset($_GET["envio"])) {
            $menupreferido = $_GET["menus"];
            if (!empty($menupreferido)) {
                echo "<br> Tu plato preferido es: " . $menupreferido;
            } else {
                echo "<br> No ha elegido ningún plato.";
            }
        }

        //lista desplegable varias opciones
        if (isset($_GET["envio"])) {
            $menupreferidos = $_GET["menusm"];
            if (!empty($menupreferidos)) {
                foreach ($menupreferidos as $menu)
                    echo "<br> Te encanta el plato: " . $menu;
            } else {
                echo "<br> No ha elegido ningún plato.";
            }
        }

        //lista desplegable varias opciones
        if (isset($_GET["envio"])) {
            $ip = $_GET["ip"];
            if (!empty($ip)) {
                echo "<br>La ip del servidor es: " . $ip;
            } else {
                echo "<br>No se ha podido averiguar la ip.";
            }
        }
    }
    ?>
</body>

=======
        if (isset($_GET['envio'])) {
            if (!empty($_GET['nombreusu'])) {
                $usuario = $_GET['nombreusu'];
                echo "<br>El nombre del usuario introducido es: " . $usuario;
            } else {
                echo "<br><h3>No has introducido ningún usuario.</3>";
            }
            if (!empty($_GET['passwd'])) {
                $password = $_GET['passwd'];
                echo "<br>La contraseña introducida es: " . $password;
            } else {
                echo "<br><h3>No has introducido ninguna contraseña.</3>";
            }      
        } 

        //Recogemos valores checkbox... 
        if (isset($_GET["envio"])){
            //checkbox
            if (!empty($_GET['asignaturas'])){
                $asignaturas = $_GET['asignaturas'];
                foreach($asignaturas as $asignatura) {
                    echo "<br>Te encanta el módulo: " . $asignatura;
                }
            } else {
                echo "<br>No te gusta la programación.";
            }

            //boton radio
            if (isset($_GET["envio"])){
                $equipobasket = $_GET["equipo"];
                if(!empty($equipobasket)){
                    echo "<br> Tu equipo de basket preferido es: " . $equipobasket;
                } else {
                    echo "<br> No ha elegido ningún equipo.";
                }
            }

            //lista desplegable una opción
            if (isset($_GET["envio"])){
                $menupreferido = $_GET["menus"];
                if(!empty($menupreferido)){
                    echo "<br> Tu plato preferido es: " . $menupreferido;
                } else {
                    echo "<br> No ha elegido ningún plato.";
                }
            }

            //lista desplegable varias opciones
            if (isset($_GET["envio"])){
                $menupreferidos = $_GET["menusm"];
                if(!empty($menupreferidos)){
                    foreach($menupreferidos as $menu)
                    echo "<br> Te encanta el plato: " . $menu;
                } else {
                    echo "<br> No ha elegido ningún plato.";
                }
            }

        }
    ?>
</body>
>>>>>>> 036404401f0fa4e39a921890349a59df9a4f1e47
</html>