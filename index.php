<?php

// ce sera le nom de notre routeur. Le routeur étant le premier fichier qu'on appelle en général sur un site, c'est normal de le faire dans index.php. Il va se charger d'appeler le bon contrôleur.

// On va faire passer un paramètre action  dans l'URL de notre routeur index.php pour savoir quelle page on veut appeler. Par exemple :
// index.php?action=listPosts : va afficher la liste des billets.
// index.php?action=post : va afficher un billet et ses commentaires.



// class Router 
// {

//     private $_ctrl;
//     private $_view;

//     public function routeReq (){
//         try {
//             //chargement automatique de l'instanciation des classes et rajoute automatiquement le php, il charge uniquement les classes de models
//             spl_autoload_register(function($class){
//                 require_once('Models/'.$class.'.php');
//             });


require_once('Controller/Controller.php');
require_once('Models/Models.php');

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
            // $this->_ctrl = new $controllerClass($url); 

            if(isset($url[1])){
                $model = ucfirst(strtolower($url[1]));
                $modelName = "Models".$model;
                $controllerMain->loadModel($modelName);

                $controllerMain->render();
            //     $modelFile = "Models/".$modelName.".php";
                
            //     if(file_exists($modelFile)){
            //         // $controllerMain = new Controller();
            //         require_once($modelFile);
            //         $controllerMain = new Controller();
            } 
        }
        else {
            echo 'page introuvable';
            }
        }
    
//         catch (Exception $e) {

//         }
//     }

// }

?>