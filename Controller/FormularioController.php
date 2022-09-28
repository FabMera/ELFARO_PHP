<?php

class formController{

    public $users;

    function __construct()
    {   
        $this->users = new Register($_POST['nombre'], $_POST['correo'], $_POST['fecha'], $_POST['edad'], $_POST['apellido'], $_POST['pais']);
        
        
    }

    public function listaUsers(){

        $usuarios = $this->users;

       // require ("view/respuesta_contacto.php");
    }


}
