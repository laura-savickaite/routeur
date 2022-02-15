<?php

spl_autoload_register(function ($class){
    //moi je veux que mon classname soit ControllerAccueil
    // $class = str_replace("\\", "/", $class);
    var_dump($class);
    
    if (file_exists("./Controller".$class.".php")){
        require_once("./Controller/".$class.".php");
    } else if (file_exists($class.".php")) {
        require_once($class.".php");
    }
});


?>