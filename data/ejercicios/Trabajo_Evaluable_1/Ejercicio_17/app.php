<?php

class App
{
    public function __construct($name = "Aplicación WEB")
    {
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
                echo "Error en el servidor.";
            } else {
                header("HTTP/1.0 404 Not Found");
                echo "No encontrado.";
            }
        } finally {
            echo "<pre>";
            print_r($th);
        }
    }

    public function index()
    {
        include('views/index.php');
    }

    public function fibonacci()
    {
        include('views/fibonacci.php');
    }

    public function factoriales()
    {
        include('views/factoriales.php');
    }

    public function primos()
    {
        include('views/primos.php');
    }

    public function potencias()
    {
        include('views/potencias.php');
    }
}
