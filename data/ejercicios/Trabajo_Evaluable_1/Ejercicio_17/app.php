<?php

class App
{
    public function __construct($name = "Aplicación WEB")
    {
        // echo "Consturyendo la app <hr>";
        $this->name = $name;
    }

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'index';
        }

        try {
            $this->$method();
        } catch (\Throwable $th) {
            if (method_exists($this, $method)) {
                header("HTTP/1.0 500 Internal Server Error");
                return http_response_code(500);
                echo "Error en el servidor";
            } else {
                header("HTTP/1.0 404 Not Found");
                echo "No encontrado";
            }
        } finally {
            echo "<pre>";
            print_r($th);
        }
    }

    public function index()
    {
        // echo "Estamos en el index<br>";
        include('views/index.php');
    }

    public function fibonacci()
    {
        // echo "Estamos en fibonacci<br>";
        include('views/fibonacci.php');
    }

    public function factoriales()
    {
        // echo "Estamos en factoriales<br>";
        include('views/factoriales.php');
    }

    public function primos()
    {
        // echo "Estamos en primos<br>";
        include('views/primos.php');
    }

    public function potencias()
    {
        // echo "Estamos en potencias<br>";
        include('views/potencias.php');
    }
}
