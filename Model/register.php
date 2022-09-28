<?php

class Register
{

    public $nombre;
    public $apellido;
    public $pais;
    public $correo;
    public $fecha;
    public $edad;

    function __construct($nombre, $correo, $fecha, $edad, $apellido, $pais)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->fecha = $fecha;
        $this->edad = $edad;
        $this->pais = $pais;
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

    function set_fecha($fecha)
    {
        $this->fecha = $fecha;
    }

    function get_fecha()
    {
        return $this->fecha;
    }

    function set_edad($edad)
    {
        $this->edad = $edad;
    }

    function get_edad()
    {
        return $this->edad;
    }

    function set_apellido($apellido)
    {
        $this->apellido = $apellido;
    }

    function get_apellido()
    {
        return $this->apellido;
    }

    function set_pais($pais)
    {
        $this->pais = $pais;
    }

    function get_pais()
    {
        return $this->pais;
    }
}

//Creamos un objeto de la clase Registro

/* 
echo $miregistro->get_nombre();
echo "<br/>";
echo $miregistro->get_apellido();
echo "<br/>";
echo $miregistro->get_correo();
echo "<br/>";
echo $miregistro->get_pais();
echo "<br/>";
echo $miregistro->get_edad();
echo "<br/>";
echo $miregistro->get_fecha();
echo "<br/>";
 */