<?php

class contactoController{

    public $contactos;


    function __construct()
    {
        $this->contactos = new FormContacto($_POST['txtNombre'],$_POST['txtEmail'],$_POST['comentario']);
    }

    public function listaContacto(){

        $ingresados = $this->contactos;
        //aqui se muestra a la vista respuesta_contacto.php
        require ('./Views/respuesta_contacto.php');

    }

}


?>