<?php

// require_once('Controller/Controller.php');
// require_once('Models/Models.php');

class Application {

    public static function process() {
                // ce qu'on va inclure comme fichier en fonction des différentes actions de l'utilisateur
        if(!empty($_GET['p'])){
            // le filter va filtrer ce qu'on a dans le get afin donc de sécuriser, le nom du filtre suit
            $url = explode('/', filter_var($_GET['p'], FILTER_SANITIZE_URL));
            var_dump($_GET['p']);
            //ucfirst = première lettre en maj
            $controller = ucfirst(strtolower($url[0]));
            // echo $controller;
            $controllerName = "Controller".$controller;
            var_dump($controllerName);
            $controllerFile = "Controller/".$controllerName.".php";

            //le router va définir quelle page il va inclure selon l'action de l'utilisateur càd, si l'utilisateur va chercher accueil -> à travers toutes les transformations d'en-haut, le controller choisi sera ControllerAccueil.php

                //si tu n'instancie pas ton objet, ton autoload ne trouvera pas dans quelle classe aller. En effet, l'autoload va dans application, c'est application qui va trouver selon l'url le controller (et donc l'autoload trouve ainsi sa classe puisqu'ils ont le même nom) ET la task qu'on lui demande grâce à l'url ici de dire hello
            
            if ($controllerName == "ControllerAccueil") {
                $controllerName::showNames();
            }
        }
    }
}



?>