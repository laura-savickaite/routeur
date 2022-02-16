<?php

class ProductModel extends Model {

    protected $table = 'products';

    public function __construct(){
        parent::__construct();
    }

    public function insert($nom, $description, $prix, $id_categorie, $id_ss_categorie, $quantite)
    {

        $insert=$this->pdo-> prepare('INSERT INTO products SET nom=:nom, description=:description, prix=:prix, $id_categorie=:$id_categorie, quantite=:quantite');
        $insert -> execute(['nom' => $nom, 'description' => $description, 'prix' => $prix, 'id_categorie' => $id_categorie, 'id_ss_categorie' => $id_ss_categorie, 'quantite' => $quantite]);
        
    }
    //pour insérer le produit (à regarder pour insérer les images)

    public function update($id_categorie, $id)
    {
        $update=$this->pdo -> prepare('UPDATE `products` SET `id_categorie`=: id_categorie WHERE id=:id');
        $update -> execute(['id_categorie' => $id_categorie, 'id' => $id]);
    }
    //pour update la catégorie de l'objet ou sa ss-catégorie juste je change l'id_categorie par ss_categorie
}



?>