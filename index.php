<?php
require_once "./Config.php";
require_once "./core/router.php";
require_once "./Models/DB.php";
require_once "./Controllers/ClienteController.php";
require_once "./Controllers/HomeController.php";

if(isset($_GET['c'])){

    $controller = CargarController($_GET['c']);

    if(isset($_GET['a'])){
        if(isset($_GET['id'])){
            CargarAction($controller, $_GET['a'], $_GET['id']);
        }
        else{
            CargarAction($controller, $_GET['a']);
        }
    }
    else{
        CargarAction($controller, MAIN_ACTION);
    }
}
else{
    $controller = CargarController(MAIN_CONTROLLER);
    $tmp = MAIN_ACTION;
    $controller->$tmp();
}
