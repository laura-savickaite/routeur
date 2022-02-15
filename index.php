<?php


require_once('Controller/Controller.php');
require_once('Models/Models.php');

class Application {

    public static function process() {
                // ce qu'on va inclure comme fichier en fonction des différentes actions de l'utilisateur
    if(!empty($_GET['p'])){
        // le filter va filtrer ce qu'on a dans le get afin donc de sécuriser, le nom du filtre suit
        $url = explode('/', filter_var($_GET['p'], FILTER_SANITIZE_URL));
        // var_dump($url);
        //ucfirst = première lettre en maj
        $controller = ucfirst(strtolower($url[0]));
        // echo $controller;
        $controllerName = "Controller".$controller;
        $controllerFile = "Controller/".$controllerName.".php";

        //le router va définir quelle page il va inclure selon l'action de l'utilisateur càd, si l'utilisateur va chercher accueil -> à travers toutes les transformations d'en-haut, le controller choisi sera ControllerAccueil.php

        //si ce file existe alors tu l'appelles
        if(file_exists($controllerFile)){
            $controllerMain = new Controller();
            require_once($controllerFile);


            if(isset($url[1])){
                $model = ucfirst(strtolower($url[1]));
                $modelName = "Models".$model;
                $controllerMain->loadModel($modelName);

                $controllerMain->render();

            } 
        }
        else {
            echo 'page introuvable';
            }
        }
    }
   
}


?>