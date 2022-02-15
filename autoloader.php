<?php

spl_autoload_register(function($className){
    //moi je veux que mon classname soit ControllerAccueil
    $className = str_replace("\\", "/", $className);

    require_once($className.".php");

    var_dump($className);
});


?>