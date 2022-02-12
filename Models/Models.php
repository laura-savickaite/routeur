<?php

class Model{

    protected $pdo;

    Public function __construct(){
        // echo "lol";
        try
            {
                $this->pdo = new PDO('mysql:host=localhost;dbname=routeur;charset=utf8', 'root', '', [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);
            }
            catch(PDOException $e)
            {
                die('Erreur : '.$e->getMessage());
            }

	    }

        public function selectAll(){

        }

        public function selectOne(){
            
        }
    
}

?>




<?php

// class modelUser
// {

    // protected $pdo;

    // function __construct()
    // {
    //     try
    //         {
    //             $this->pdo = new PDO('mysql:host=localhost;dbname=routeur;charset=utf8', 'root', 'root', [
    //                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    //             ]);
    //         }
    //         catch(PDOException $e)
    //         {
    //             die('Erreur : '.$e->getMessage());
    //         }

    //     // return $pdo;
    // }


//     function viewUsers()
//     {
      
//         $select = $this->pdo->prepare("SELECT * FROM user");
//         $select->execute();
//         $result = $select->fetchAll();

// // obliger de boucler?? pour afficher le nom de chaque user? 

// //pour entrer dans un tableau il faut pas oublier que le foreach a une clé qui entre ds la première partie du tableau; donc siblez ds le echo le tableau en dessous. 
//         foreach($result as $name){

//             echo '<pre>' . $name['name'] . '</pre>';
                
                
//         }
       
//         // echo '<pre>';
//         // var_dump($result);
//         // echo '</pre>';
//         return $result;
//     }
            
       
       
    

// }