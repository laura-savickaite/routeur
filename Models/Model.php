<?php

class Model extends Database{

    private $pdo;
    protected $table;
    // protected $set;

    // public function __construct(){ 
    //     $this->pdo = Database::getPDO();
	//     }

    public function requete($sql, ?array $attributs = null){

        $this->pdo = Database::getPDO();

        // echo "je suis dans la requete";
        // extract($attributs);
        // var_dump($attributs);
        // var_dump($sql);
        //On vérifie si on a des attributs 
        if ($attributs !== null){
            //requête préparée
            $query = $this->pdo->prepare($sql);
            $query->execute($attributs);
            return $query;
        } else {
            //requête simple
            return $this->pdo->query($sql);
        }

    }

    public function create() 
    {
        // echo "je suis dans create";
        $champs = [];
        $inter = [];
        $valeurs = [];

        // On boucle pour éclater le tableau
        foreach($this as $champ => $valeur){
            // INSERT INTO annonces (titre, description, actif) values (?,?,?)
            
            if($valeur != null && $champ != 'database' && $champ != 'table'){
                $champs[] = $champ;
                $inter[] = "?";
                $valeurs[] = $valeur;
            }
            
        }

        //transformer la tableau champs en chaine de caractére
        $liste_champs = implode(', ', $champs);
        $liste_inter = implode(', ', $inter);

        //On execute la requête 
        // return $this->requete('INSERT INTO '.$this->table.' ('.$liste_champs.') VALUES ('.$liste_inter.')', $valeurs);
    }

    // public function selectOne(int $id){

    //     $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
    //     $query->execute(['id' => $id]);
    //     $item = $query->fetch();

    //     return $item;
    // }
        //pour en afficher 1 : user ou product
        //pour voir si le login est used

    // public function selectAll(?int $id = null, ?string $id_table="" , ?string $order=""){
    //     $sql = "SELECT * FROM {$this->table}";

    //     if($id != null && $order){
    //             $sql .= "WHERE id=:id ORDER BY ".$order;
    //             $query->execute([$id_table => $id]);
    //         }elseif($id != null){
    //             $sql .= "WHERE id=:id";
    //             $query->execute([$id_table => $id]);
    //         }
    //         $resultats = $this->pdo->query($sql);
            
        
    //     //PDO::query — Prépare et Exécute une requête SQL sans marque substitutive
    //     $items = $resultats->fetchAll();       

    //     return $items;
    // }
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


    // public function insert(array $variables = [])
    // {
    //     extract($variables);
        
    //     $query = $this->pdo->prepare("INSERT INTO {$this->table} SET {$this->set}");
    //     $query->execute($variables);
    // }
    // //pour avis on aura : prenom, le content de l'avis, l'id produit, l'id user, created at = NOW()

    // public function update(array $variables = [])
    // {
    //         extract($variables);

    //         var_dump($variables);
    //         $id = $variables['id'];
        
    //         $query = $this->pdo->prepare("UPDATE {$this->table} SET {$this->set} WHERE id =: $id");
    //         $query->execute($variables);

    //      }
    //     extract($variables);
        
    //     $query = $this->pdo->prepare("UPDATE {$this->table} SET {$this->set}");
    //     $query->execute($variables);
    
    // }

    
}

?>
