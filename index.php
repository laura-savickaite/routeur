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


// var_dump($_GET['p']);
Application::process();

// $truc = new ControllerAccueil();
// $truc->hello();

// $test = new ControllerAccueil();
// $test->test();

// var_dump($className);

// $routeur = new Application;
// $routeur->process();

echo "hey";

// if(!empty($_GET['p'])){
//     // le filter va filtrer ce qu'on a dans le get afin donc de sécuriser, le nom du filtre suit
//     $url = explode('/', filter_var($_GET['p'], FILTER_SANITIZE_URL));
//     // var_dump($url);
//     //ucfirst = première lettre en maj
//     $controller = ucfirst(strtolower($url[0]));
//     // echo $controller;
//     $controllerName = "Controller".$controller;
//     // var_dump($controllerName);
//     $controllerFile = "Controller/".$controllerName.".php";

//     //le router va définir quelle page il va inclure selon l'action de l'utilisateur càd, si l'utilisateur va chercher accueil -> à travers toutes les transformations d'en-haut, le controller choisi sera ControllerAccueil.php

//     //si ce file existe alors tu l'appelles
//     if(file_exists($controllerFile)){
//         require_once($controllerFile);


//         // if(isset($url[1])){
            
//         // } 
//     }
//     else {
//         echo 'page introuvable';
//         }
//      }

?>