<?php

class PanierModels extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function insert($id_user, $id_product, $nom, $prix, $quantite)
    {
        $insert=$this->pdo-> prepare('INSERT INTO panier SET id_user =: id_user, id_product =: id_product, nom=:nom, prix=:prix');
        $insert -> execute(['id_product'=>$id_product,'nom' => $nom, 'prix' => $prix, 'quantite' => $quantite]);
    }
    //insert into la table panier, tous les attributs seront du produit sélectionné lorsque cliqué sur le bouton "ajouter au panier" + la session de l'utilisateur

    public function selectAll($id)
    {
        $selectAll = $this->pdo->prepare("SELECT * FROM panier WHERE id=:id");
        $selectAll -> execute(['id' => $id]);
        $resultAll = $select->fetchAll();
        return $resultAll;
    }
    //c'est l'id de l'utilisateur attention 


    public function delete($id)
    {
        $delete=$this->pdo-> prepare('DELETE FROM `products` WHERE id=:id');
        $delete -> execute(['id' => $id]);
    }
    //quand clique sur payer on va insert dans commandes (donc à voir dans le model commandes) mais ici on delete AVEC l'id de l'utilisateur


    //à voir avec le bouton ajouter la quantité qui demandera selectOne et boucle incrémentant ou décrémentant 

}



?>