<?php

class ProductModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function selectAll()
    {
        $selectAll = $this->pdo->prepare("SELECT * FROM products");
        $selectAll -> execute();
        $resultAll = $select->fetchAll();
        return $resultAll;
    }
    //pour afficher tous les produits

    public function selectOne($id)
    {
        $selectOne = $this->pdo->prepare("SELECT * FROM products WHERE id =: id");
        $selectOne -> execute(['id' => $id]);
        $resultOne = $select->fetch();
        return $resultOne;
    }
    //pour afficher/sélectionner un produit via son id

    public function insert($nom, $description, $prix, $id_categorie, $id_ss_categorie, $quantite)
    {

        $insert=$this->pdo-> prepare('INSERT INTO products SET nom=:nom, description=:description, prix=:prix, $id_categorie=:$id_categorie, quantite=:quantite');
        $insert -> execute(['nom' => $nom, 'description' => $description, 'prix' => $prix, 'id_categorie' => $id_categorie, 'id_ss_categorie' => $id_ss_categorie, 'quantite' => $quantite]);
        
    }
    //pour insérer le produit (à regarder pour insérer les images)

    public function delete($id)
    {
        $delete=$this->pdo-> prepare('DELETE FROM `products` WHERE id=:id');
        $delete -> execute(['id' => $id]);
    }

    public function update($id_categorie, $id)
    {
        $update=$this->pdo -> prepare('UPDATE `products` SET `id_categorie`=: id_categorie WHERE id=:id');
        $update -> execute(['id_categorie' => $id_categorie, 'id' => $id]);
    }
    //pour update la catégorie de l'objet ou sa ss-catégorie juste je change l'id_categorie par ss_categorie
}



?>