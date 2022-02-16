<?php

abstract class Model{

    protected $pdo;
    protected $table;

    Public function __construct(){ 
        $this->pdo = Database::getPDO();
	    }


    public function selectOne(int $id){

        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $item = $query->fetch();

        return $item;
    }
        //pour en afficher 1 : user ou product
        //pour voir si le login est used

    public function selectAll(?int $id, ?string $order){
        $sql = "SELECT * FROM {$this->table}";
        if(isset($id) && isset($order)){
                $sql .= "WHERE id=:id ORDER BY ".$order;
                $query->execute(['id_produit' => $id]);
            }elseif(isset($id)){
                $sql .= "WHERE id=:id";
                $query->execute(['id_user' => $id]);
            }
        $resultats = $this->pdo->query($sql);
        //PDO::query — Prépare et Exécute une requête SQL sans marque substitutive
        $items = $resultats->fetchAll();       

        return $items;
    }
    //pour les avis ça sera l'id_products et l'order by DESC
    //pour le panier de l'utilisateur l'id sera l'id de l'utilisateur la fk

    public function delete($id){
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    } 
    //dans product c'est l'id du produit  
    //dans sscatégorie c'est l'id de la ss catégorie
    //dans panier c'est l'id du produit à supprimer aussi 

}

?>
