<?php
class Renderer {
    //render ('articles/show')
//je rajoute un array parce que : si je ne le fais pas je vais avoir des warnings d'erreurs disant que dans tamplates articles index et show, il ne connait pas la variable $articles
//la raison est que les variables dans les fonctions sont hermétiques, on ne peut les réutiliser hors de la fonction. Il ne connait ces variables que par rapport aux fonctions
//dans ma fonction, je lui demande donc : de prendre le path, le titre mais je lui donne également les variables nécessaires pour qu'elle fonctionne correctement
public static function render(string $path){

    // quand elle reçoit ces variables, elles sont dans un tableau DONC si je veux les afficher dans mon html il faudrait que je les extracte du tableau sinon il ne peut pas lire un array
        // au lieu de ['var1'=> 2, 'var2' => "truc"]
        //je veux :
        //$var1 = 2
        //$var2 = "truc"
    //pour ceci j'utilise une fonction inhérente à php
        //https://www.php.net/manual/fr/function.extract.php
        // Vous devez utiliser un tableau associatif. Un tableau indexé numériquement ne produira aucun résultat, à moins que vous n'utilisiez l'option EXTR_PREFIX_ALL ou EXTR_PREFIX_INVALID.
        //extract(array &$array, int $flags = EXTR_OVERWRITE, string $prefix = ""): int
        //ne pas utiliser cette fonction sur des données non-sûres comme les données Get etc...

        echo "lol";
        ob_start();
        require('View/'.$path.'.html.php');
        $pageContent = ob_get_clean();
    
        require('View/layout.html.php');
    
    }
}
?>