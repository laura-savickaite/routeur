<?php

class UserModel extends Model {

    protected $table = 'user';
    protected $set = 'name=:name';
    // email=:email, password=:password, nom=:nom, prenom=:prenom, adresse=:adresse

    public function __construct(){
        parent::__construct();
    }


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