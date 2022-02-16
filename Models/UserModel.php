<?php

class UserModel {

    public function __construct(){
        // parent::__construct();
    }

    public function selectAll()
    {   
        $select = $this->pdo->prepare("SELECT * FROM user");
        $select->execute();
        $result = $select->fetchAll();
        return $result;
    }

    public function selectOne()
    {
        $select = $this->pdo->prepare("SELECT * FROM user WHERE id=?");
        $select->execute();
        $result = $select->fetch();
        return $result;
    }

    
}
?>