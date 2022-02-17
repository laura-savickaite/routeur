<?php

class CommandesModels extends Model {

    protected $table = 'commandes';
    protected $set = 'id_commande =: id_commande, id_user =: id_user, id_product =: id_product, nom=:nom, prix=:prix, quantite=:quantite';

    public function __construct(){
        parent::__construct();
    }

    //quand l'user clique sur "passer commande"/acheter (remplissage des champs) le panier l'id commande ne s'autoincrémente pas alors faudra donner le même id pour tous

   //une fois la commande validée aka payée, ça se transforme en livraison
}



?>