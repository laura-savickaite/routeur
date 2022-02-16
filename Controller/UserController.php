<?php

class UserController{

    public function __construct(){

    }

    public static function selectAll (){

        $accueilModel = new ModelsConnexion();
        $result = $accueilModel->viewUsers();
        // obliger de boucler?? pour afficher le nom de chaque user? 

        //pour entrer dans un tableau il faut pas oublier que le foreach a une clé qui entre ds la première partie du tableau; donc siblez ds le echo le tableau en dessous. 
        foreach($result as $name){

            echo '<pre>' . $name['name'] . '</pre>';
                       
        }
        return $result;
    }
}



?>