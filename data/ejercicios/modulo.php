<?php

    /*
        - Interfaces, clases abstract
        - objetos
        - polimorfismo: sobreescritura de metodos.
            - sobrecargar metodos ? -> No* 
            - sobrecargar constructores ? -> No* 
        - herencia unica -> extends
        - invocar "algo" del padre: parent::
        - $this -> metodo
        - $this -> atributo
        - static contador;
            -> acceso a elemento estatico dentro de la clase self::
            -> pertenece a la clase no al objeto
    */

class Modulo extends Asignatura
{
    private $codigo = null;

    function __construct($nombre, $numcreditos, $codigo)
    {
        parent::__construct($nombre, $numcreditos);
        $this->codigo = $codigo;
    }

    function getCodigo()
    {
        return $this->codigo;
    }

    function setCodigo($nuevocod)
    {
        $this->codigo = $nuevocod;
    }

    function __toString()
    {
        return "<br><b>Datos del MODULO: </b>"
            . "<br>Nombre del Modulo: " . $this->getNombre()
            . "<br>Numero de creditos: " . $this->getNumeroCreditos()
            . "<br>Codigo del modulo: "  . $this->codigo;
    }
}
