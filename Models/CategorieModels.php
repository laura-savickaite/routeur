<?php

class CategorieModels extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function selectAllFrom()
    {
        // inner join
        $selectAllFrom = $this->pdo->prepare("SELECT products.nom, products.prix, categorie.nom FROM `categorie` INNER JOIN products ON id_categorie=categorie.id");
        $selectAllFrom -> execute();
        $resultAllFrom = $selectAllFrom->fetchAll();
        return $resultAllFrom;

    }
    //pour sélectionner tous les produits de cette catégorie

}

?>