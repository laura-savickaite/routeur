<?php

class CommandesModels extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function add($id_user, $id_product, $nom, $prix, $quantite){
        $insert=$this->pdo-> prepare('INSERT INTO commandes SET id_user =: id_user, id_product =: id_product, nom=:nom, prix=:prix, quantite=:quantite');
        $insert -> execute(['id_product'=>$id_product,'nom' => $nom, 'prix' => $prix, 'quantite' => $quantite]);
    }
    //quand l'user clique sur acheter le panier 

    public function selectAll($id)
    {
        $selectAll = $this->pdo->prepare("SELECT * FROM commandes WHERE id=:id");
        $selectAll -> execute(['id' => $id]);
        $resultAll = $select->fetchAll();
        return $resultAll;
    }
   //quand panier validé = commande validé donc envoie d'un mail avec toutes les informations, pour ceci va falloir select all de commandes (plus ou moins sauf les id, juste les noms et la quantité) 
}



?>