<?php

abstract class Model{

    protected $pdo;
    protected $table;
    protected $set;

    public function __construct(){ 
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

    public function selectAll(?int $id = null, ?string $id_table="" , ?string $order=""){
        $sql = "SELECT * FROM {$this->table}";

        if($id != null && $order){
                $sql .= "WHERE id=:id ORDER BY ".$order;
                $query->execute([$id_table => $id]);
            }elseif($id != null){
                $sql .= "WHERE id=:id";
                $query->execute([$id_table => $id]);
            }
            $resultats = $this->pdo->query($sql);
            
        
        //PDO::query — Prépare et Exécute une requête SQL sans marque substitutive
        $items = $resultats->fetchAll();       

        return $items;
    }
    //pour les avis ça sera l'id_products et l'order by DESC
    //id_table une string disant id (l'id des produits quoi)
    //pour le panier de l'utilisateur l'id sera l'id de l'utilisateur la fk
    //id_table une string disant id (l'id des paniers quoi)

    public function delete($id){
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    } 
    //dans product c'est l'id du produit  
    //dans sscatégorie c'est l'id de la ss catégorie
    //dans panier c'est l'id du produit à supprimer aussi 

    public function insert(array $variables = [])
    {
        // $variables = $name ('test')
        extract($variables);
        
        $query = $this->pdo->prepare("INSERT INTO {$this->table} SET {$this->set}");
        $query->execute($variables);
    }
    //pour avis on aura : auteur (prénom), le content de l'avis, l'id produit, l'id user, created at = NOW()

    //pour ss catégorie et catégorie newitem est le nom de la nouvelle caté, itemcolumn est dans quelle colomne de la table ça va insérer
    //this table sera soit catégorie soit ss caté

    
}

?>
