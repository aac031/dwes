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
            $method = 'login';
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

    public function login()
    {
        include('views/login.php');
    }

    public function auth()
    {
        include('views/auth.php');
    }

    public function home()
    {
        include('views/home.php');
    }

    public function new()
    {
        include('views/new.php');
    }

    public function delete()
    {
        include('views/delete.php');
    }

    public function empty()
    {
        include('views/empty.php');
    }

    public function close()
    {
        include('views/close.php');
    }
}
