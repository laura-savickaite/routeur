<?php

class UserModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function selectAll()
    {   
        $selectAll = $this->pdo->prepare("SELECT * FROM user");
        $selectAll -> execute();
        $resultAll = $select->fetchAll();
        return $resultAll;
    }
    //pour tous les afficher

    public function selectOne($id)
    {
        $selectOne = $this->pdo->prepare("SELECT * FROM user WHERE id =: id");
        $selectOne -> execute(['id' => $id]);
        $resultOne = $select->fetch();
        return $resultOne;
    }
    //pour en afficher 1 
    //pour voir si le login est used

    public function insert($email, $password, $nom, $prenom, $adresse)
    {
        $insert=$this->pdo -> prepare('INSERT INTO user SET email=:email, password=:password, nom=:nom, prenom=:prenom, adresse=:adresse');
        $insert -> execute(['email' => $email, 'password' => $password, 'nom' => $nom, 'prenom' => $prenom, 'adresse' => $adresse]);
    }
    //pour insérer/inscrire

    public function updateLogin($email)
    {
        $updateLogin=$this->pdo -> prepare("UPDATE `user` SET `email`='".$_POST['uemail']."',`password`='".$_SESSION['user']['password']."' WHERE login='".$_SESSION['user']['email']."'");
        $updateLogin -> execute();
    }

    public function updatePassword($password)
    {
        $updatePassword=$this->pdo -> prepare("UPDATE `user` SET `password`='".$_POST['umdp']."' WHERE login='".$_SESSION['user']['email']."'");
        $updatePassword -> execute();
    }
    //pour update individuellement etc...pour adresse, etc...

    public function update()
    {
        $update=$this->pdo -> prepare("UPDATE `user` SET `login`='".$_POST['uemail']."',`password`='".$_POST['umdp']."' WHERE email='".$_SESSION['user']['email']."'");
        $update -> execute();
    }
    //pour tout update globallement

    
}
?>