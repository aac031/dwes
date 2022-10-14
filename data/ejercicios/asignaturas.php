<?php
/*
    Orientación objetos.
    - Conceptos generales en Java:
        · Sobreescritura (metodos):
            -> mismo nombre con mismo número de parámetro, diferente comportamiento.
                ·> Clase figura: metodo calcular_area.
                ·> Clase circulo: metodo calcular_area.
                ·> Clase cuadrado: metodo calcular_area.
        · Sobrecarga (metodos):
            -> mismo método con diferente número de parámetros.
        · Sobrecarga (constructores).
            -> Diferentes constructores con el mismo nombre con diferentes parámetros.
        · Polimorfismo:
            -> Objeto que se comporta como otro objeto.
                -> Casting.
                -> Sobreescritura.
                -> Sobrecarga.
                -> Ligadura dinámica.
    
    - EN PHP:
        · Si existe sobreescritura.
        · No existe sobrecarga.
        · No hay sobrecarga de constructores.
        · Si hay polimorfismo (sobreescritura).    
        · public, private, protected, por defecto public.        

    - Notación:
        · Nombre clases: UpperCamelCase (Pascal Case)
        · Nombre metodos: lowerCamelCase    
        · java: this.attr
        · php: $this->attr
*/

class Asignatura
{
    private $nombre = null;
    private $numcreditos = null;
    private static $ciclo = null;

    public function __construct($nombre, $numcreditos)
    {
        $this->nombre = $nombre;
        $this->numcreditos = $numcreditos;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    static function getCiclo()
    {
        return self::$ciclo;
    }

    static function setCiclo($nomciclo)
    {
        self::$ciclo = $nomciclo;
    }

    function getNumeroCreditos()
    {
        return $this->numcreditos;
    }

    function setNumeroCreditos($numcreditos)
    {
        $this->numcreditos = $numcreditos;
    }

    function __toString()
    {
        return "<br><b>Datos de la asignatura: </b>"
            . "<br>Nombre asignatura: " . $this->nombre
            . "<br>Numero créditos: " . $this->numcreditos;
    }
}
