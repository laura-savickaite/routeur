<?php

spl_autoload_register(function ($class){
    //moi je veux que mon classname soit ControllerAccueil
    // $class = str_replace("\\", "/", $class);
    // var_dump($class);
    // var_dump("./classes/".$class.".php");
    
    if (file_exists("./Controller/".$class.".php")){
        require_once("./Controller/".$class.".php");
    } 
    if (file_exists("./Models/".$class.".php")) {
        require_once("./Models/".$class.".php");
    }
    if (file_exists("./classes/".$class.".php")) {
        require_once("./classes/".$class.".php");
    }

});


?>