<?php

class SsCategorieModels extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function selectAllFrom()
    {
        $selectAllFrom = $this->pdo->prepare("SELECT products.nom, products.prix, ss_categorie.nom FROM `ss_categorie` INNER JOIN products ON id_ss_categorie=ss_categorie.id");
        $selectAllFrom -> execute();
        $resultAllFrom = $selectAllFrom->fetchAll();
        return $resultAllFrom;
    }


    public function updateOne($id_categorie, $id)
    {
        $updateOne=$this->pdo -> prepare('UPDATE `ss_categorie` SET `id_categorie`=: id_categorie WHERE id=:id');
        $updateOne -> execute(['id_categorie' => $id_categorie, 'id' => $id]);
    }
    //déplacer une ss-catégorie dans une autre catégorie

}


?>