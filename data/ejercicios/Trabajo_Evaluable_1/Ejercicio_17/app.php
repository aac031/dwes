<?php

//Creamos la clase App...
class App
{
    public function __construct($name = "Aplicación WEB")
    {
        $this->name = $name;
    }

    //La aplicación iniciará el método 'index'
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'index';
        }
        $this->$method();
    }

    //Función para 'index.php'.
    public function index()
    {
        include('views/index.php');
    }

    //Función para 'fibonacci.php'.
    public function fibonacci()
    {
        include('views/fibonacci.php');
    }

    //Función para 'factoriales.php'.
    public function factoriales()
    {
        include('views/factoriales.php');
    }

    //Función para 'primos.php'.
    public function primos()
    {
        include('views/primos.php');
    }

    //Función para 'potencias.php'.
    public function potencias()
    {
        include('views/potencias.php');
    }
}
