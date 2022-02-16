<?php

class CommandesModels extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function add($id_commande, $id_user, $id_product, $nom, $prix, $quantite){
        $insert=$this->pdo-> prepare('INSERT INTO commandes SET id_commande =: id_commande, id_user =: id_user, id_product =: id_product, nom=:nom, prix=:prix, quantite=:quantite');
        $insert -> execute(['id_commande' => $id_commande, 'id_product'=>$id_product,'nom' => $nom, 'prix' => $prix, 'quantite' => $quantite]);
    }
    //quand l'user clique sur "passer commande"/acheter (remplissage des champs) le panier l'id commande ne s'autoincrémente pas alors faudra donner le même id pour tous

   //une fois la commande validée aka payée, ça se transforme en livraison
}



?>