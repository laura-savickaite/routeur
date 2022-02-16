<?php

class ImagesModels extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function update($image, $id_produit)
    {
        $update=$this->pdo -> prepare('UPDATE `image` SET `image`=: image WHERE id_produit=:id_produit');
        $update -> execute(['id_produit' => $id_produit, 'image' => $image]);
    }

    public function selectAllFrom($id_image, $image, $id_produit)
    {
        $selectAll = $this->pdo->prepare('SELECT image.image, image.id, product.id FROM image INNER JOIN products WHERE id_produit=produit.id');
        $selectAll -> execute();
        $resultAll = $select->fetchAll();
        return $resultAll;
        
    }

}



?>