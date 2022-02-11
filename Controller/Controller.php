<?php

// il contiendra nos contrôleurs dans des fonctions. On va y regrouper nos anciens index.php et post.php.

// Commençons par notre controller.php . On va y regrouper nos contrôleurs dans des fonctions :

Class Controller {
	protected $model;

    Public function __construct(){
        echo "ok";
	    }

        
    Public function loadModel ($model){
            require_once('Models/'.$model.'.php');
            $this->model = new Model();
	}

    Public function render(){
        require_once('View/ViewAccueil.php');
    }
}

