<?php

require_once('Controller/Controller.php');

class Application {

    public static function process() {
                // ce qu'on va inclure comme fichier en fonction des différentes actions de l'utilisateur
    if(!empty($_GET['p'])){
        // le filter va filtrer ce qu'on a dans le get afin donc de sécuriser, le nom du filtre suit
        $url = explode('/', filter_var($_GET['p'], FILTER_SANITIZE_URL));
        //ucfirst = première lettre en maj
        $controller = ucfirst(strtolower($url[0]));
        // echo $controller;
        $controllerName = "Controller".$controller;
        var_dump($controllerName);
        $controllerFile = "Controller/".$controllerName.".php";

        //le router va définir quelle page il va inclure selon l'action de l'utilisateur càd, si l'utilisateur va chercher accueil -> à travers toutes les transformations d'en-haut, le controller choisi sera ControllerAccueil.php

        //si ce file existe alors tu l'appelles
         if(file_exists($controllerFile)){
            require_once($controllerFile);

            if(!empty($url[1])){
                $task = $url[1];
            } 

            $controller = new $controllerName();
            $controller->$task();
         }
        // else {
        //     echo 'page introuvable';
        //     }
         }
     }
   
 }



?>