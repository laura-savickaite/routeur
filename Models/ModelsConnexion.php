<?php



class ModelsConnexion extends Model {
    public function __construct(){
        parent::__construct();
    }
    public function viewUsers()
    {   
        $select = $this->pdo->prepare("SELECT * FROM user");
        $select->execute();
        $result = $select->fetchAll();

        return $result;
    }
}
?>