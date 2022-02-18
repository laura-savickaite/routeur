<?php

require_once('Renderer.php');

class UserController{

    public function __construct(){

    }

    public static function selectAll ()
    {
        $accueilModel = new UserModel();
        $result = $accueilModel->selectAll();      
        // obliger de boucler?? pour afficher le nom de chaque user? 

        //pour entrer dans un tableau il faut pas oublier que le foreach a une clé qui entre ds la première partie du tableau; donc siblez ds le echo le tableau en dessous. 
        foreach($result as $name){

            echo '<pre>' . $name['name'] . '</pre>';
                       
        }
        Renderer::render('user');
        // return $result;

    }

    public static function testcreate ()
    {
        $user = new UserModel;
        $admin = $user
            -> setName('toto');

        $admin->create($user);
        // $usermodel = new UserModel();
        // $test = $usermodel->setName('toto'); 
        // var_dump($test);
        // $usermodel->create($test);
        // var_dump($usermodel);
        

    }

    // public static function add ()
    // {
    //     // $name = 'test';
    //     // $accueilModel = new UserModel();
    //     // $result = $accueilModel->insert(compact ('name')); 
    // }
    
    // public static function update()
    // {
    //     $name = 'truc';
    //     $id = 5;
    //     $accueilModel = new UserModel();
    //     $result = $accueilModel->update(compact ('id', 'name')); 
    // }
}



?>