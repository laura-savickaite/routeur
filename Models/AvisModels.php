<?php

class AvisModels extends Model{

    protected $table = 'avis';

    public function __construct()
    {
        parent::__construct();
    }

    //star reviews : https://www.youtube.com/watch?v=NmF_00eAjD8
    //pour lire tous les commentaires sur un produit en particulier
    
    public function insertComment($author, $id_user, $content, $id)
    {
        $query = $this->pdo->prepare('INSERT INTO avis SET author = :author, content = :content, id_produit = :id, id_user = :id_user, created_at = NOW()');
        $query->execute(['prenom' => $author, 'id_user'=> $id_user, 'content' => $content, 'id' => $id]);
    }
    //pour rajouter un commentaire

    public function updateComment($author, $id_user, $content, $id)
    {
        $query = $this->pdo->prepare('UPDATE avis SET author = :author, content = :content, id_produit = :id, created_at = NOW() WHERE id_user = :id_user');
        $query->execute(['prenom' => $author, 'id_user'=> $id_user, 'content' => $content, 'id' => $id]);
    }
    //c'est l'author c'est le prénom de l'user
}

?>