<?php
//Creamos la clase App...
class App
{
    public function __construct($name = "Aplicación WEB")
    {
        $this->name = $name;
    }

    //La aplicación iniciará el método 'login'
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }
        $this->$method();
    }

    //Función para 'login.php'.
    public function login()
    {
        include('views/login.php');
    }

    //Función para 'auth.php'.
    public function auth()
    {
        include('views/auth.php');
    }

    //Función para 'home.php'.
    public function home()
    {
        include('views/home.php');
    }

    //Función para 'new.php'.
    public function new()
    {
        include('views/new.php');
    }

    //Función para 'delete.php'.
    public function delete()
    {
        include('views/delete.php');
    }

    //Función para 'empty.php'.
    public function empty()
    {
        include('views/empty.php');
    }

    //Función para 'close.php'.
    public function close()
    {
        include('views/close.php');
    }
}
