
<?php
require_once "./Config.php";

function CargarController($controller){
    $controllerName = ucwords($controller)."Controller";
    $archivoController = 'Controllers/'.$controllerName.'.php';

    if(!is_file($archivoController)){
        $archivoController = 'Controllers/'.MAIN_CONTROLLER.'.php';
    }

    require_once $archivoController;
    $control = new $controllerName();
    return $control;
}

function CargarAction($controller, $action, $id = null){
    if(isset($action) && method_exists($controller,$action)){
        if($id == null){
            $controller->$action();
        }
        else{
            $controller->$action($id);
        }
    }
    else{
        $tmp = MAIN_ACTION;
        $controller->$tmp();
    }
}