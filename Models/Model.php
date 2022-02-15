<?php

class Model{

    protected $pdo;

    Public function __construct(){ 
        $this->pdo = Database::getPDO();

	    }

        public function selectAll(){

        }

        public function selectOne(){

        }

        //potentiellement insert avec l'utilisateur et maybe le produit ????
        //maybe l'uupdate aussi 
        //seul soucis avec ceci c'est le nombre de variables qui risque de varier selon si c'est le produit/l'utilisateur
    
}

?>
