<?php

class LivraisonModels extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function add($id_livraison, $id_commande, $id_user, $id_product, $nom, $prix, $quantite, $adresse, $carte)
    {
        $insert=$this->pdo-> prepare('INSERT INTO livraison SET id_livraison =: id_livraison, id_commande =: id_commande, id_user =: id_user, id_product =: id_product, nom=:nom, prix=:prix, quantite=:quantite, adresse=:adresse, carte=:carte');
        $insert -> execute(['id_livraison' => $id_livraison,'id_commande' => $id_commande, 'id_product'=>$id_product,'nom' => $nom, 'prix' => $prix, 'quantite' => $quantite]);
        
    }

    public function selectAllFrom($id)
    {
        $selectAllFrom = $this->pdo->prepare("SELECT commande.produitnom, commande.produitprix, commande.produitquantite, livraison.adresse, livraison.carte FROM `commande` INNER JOIN livraison ON id_commande=commande.id WHERE id=:id");
        $selectAllFrom -> execute(['id' => $id]);
        $resultAllFrom = $selectAllFrom->fetchAll();
        return $resultAllFrom;
    }
    //quand panier validé = commande validé donc envoie d'un mail avec toutes les informations, pour ceci va falloir select all de commandes (plus ou moins sauf les id, juste les noms et la quantité)
    //c'est l'id de la commande normalement :')  
}



?>