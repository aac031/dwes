<?php

class App
{
    public function __construct($name = "Aplicación WEB")
    {
        // echo "Construyendo la app <hr>";
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
        // echo "Estamos en el login<br>";
        include('views/login.php');
    }

    public function auth()
    {
        // echo "Estamos en auth<br>";
        include('views/auth.php');
    }

    public function home()
    {
        // echo "Estamos en home<br>";
        include('views/home.php');
    }

    public function logout()
    {
        // echo "Estamos en logout<br>";
        include('views/logout.php');
    }
}
