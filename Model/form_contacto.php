<?php


class FormContacto
{

    public $nombre;
    public $correo;
    public $descrip;

    function __construct($nombre, $correo, $descrip)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->descrip = $descrip;
    }
    function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function get_nombre()
    {
        return $this->nombre;
    }

    function set_correo($correo)
    {
        $this->correo = $correo;
    }

    function get_correo()
    {
        return $this->correo;
    }


    function set_descrip($descrip)
    {
        $this->descrip = $descrip;
    }

    function get_descrip()
    {
        return $this->descrip;
    }
}
