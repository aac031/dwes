<?php
//Creamos la clase App...
class App
{
    public function __construct($name = "Aplicación WEB")
    {
        $this->name = $name;
    }

    //La aplicación iniciará el método 'home'
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }
        $this->$method();
    }

    //Función para 'home.php'.
    public function home()
    {
        include('views/home.php');
    }

    //Función para 'colores.php'.
    public function colores()
    {
        include('views/colores.php');
    }

    //Función para 'cambio.php'.
    public function cambio()
    {
        include('views/cambio.php');
    }
}
