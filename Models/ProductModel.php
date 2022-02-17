<?php

class ProductModel extends Model {

    protected $table = 'products';
    protected $set = 'nom=:nom, description=:description, prix=:prix, $id_categorie=:$id_categorie, quantite=:quantite';

    public function __construct(){
        parent::__construct();
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