<?php

class ModelsConnexion extends Model {
    function __construct(){
        parent::__construct();
    }
    function viewUsers()
    {
      
        $select = $this->pdo->prepare("SELECT * FROM user");
        $select->execute();
        $result = $select->fetchAll();

// obliger de boucler?? pour afficher le nom de chaque user? 

//pour entrer dans un tableau il faut pas oublier que le foreach a une clé qui entre ds la première partie du tableau; donc siblez ds le echo le tableau en dessous. 
        foreach($result as $name){

            echo '<pre>' . $name['name'] . '</pre>';
                
                
        }
       
        // echo '<pre>';
        // var_dump($result);
        // echo '</pre>';
        return $result;
    }
}
echo "je suis là";  

?>