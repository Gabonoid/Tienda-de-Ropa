<?php

//Load
$controllerFile = "Controllers/" . $controller . ".php";

//Validamos si existe el Controlador
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();

    //Validadmos si existe el método
    if (method_exists($controller, $method)) {
        $controller->{$method}($params);
    } else {
        require_once("Controllers/Error.php");
    }
} else {
    require_once("Controllers/Error.php");
}

?>