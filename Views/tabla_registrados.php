<?php

require './Model/register.php';
require './Controller/FormularioController.php';
require './Model/form_contacto.php';


$controller = new formController;


$controller->listaUsers();

?>