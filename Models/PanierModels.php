<?php

class PanierModels extends Model {

    protected $table = 'panier';
    protected $set = 'id_user =: id_user, id_product =: id_product, nom=:nom, prix=:prix';

    public function __construct(){
        parent::__construct();
    }


    //insert into la table panier, tous les attributs seront du produit sélectionné lorsque cliqué sur le bouton "ajouter au panier" + la session de l'utilisateur


    //delete :
    //quand clique sur "passer commande"/payer (où on va rentrer des champs) on va insert dans commandes (donc à voir dans le model commandes) mais ici on delete AVEC l'id de l'utilisateur


    //à voir avec le bouton ajouter la quantité qui demandera selectOne et boucle incrémentant ou décrémentant 

}



?>