<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
    <link rel="stylesheet" href="../css/exemple.css">
</head>
<body>
    <h1>Les Fonctions</h1>


    <?php
        function Motocross(){
            echo 'Wheeling !'. '<br>';// /!\ un echo dans une function est automatiquement affiché dès que cette dernière est appelé, sa valeur ne peut pas être réutilisé
        }

        Motocross();


        function SBK(){
            return 'Pole Position';
            echo 'fffff';// return: permet de stocker la valeur afin de la réutiliser, l'instruction return termine la fonction (echo 'fffff' ne fonctionera pas)
        }

        SBK();// rien ne s'affichera

        $sbk = SBK();
        echo $sbk;
        echo '<br>'.gettype($sbk);


        function verif_variable(){
            
        }
    ?>

    <h2>Les fonctions string</h2>


    <?php
        echo '<p> "strlen" sera affiché 13 caractère au lieu de 9 (caractère spéciaux vaut 2 et espace 1)</p>';
        echo strlen('il est à toi').'<br>';


        echo '<p>"str_word_count" sera afiché 4 au lieu de 5( caractère spéciaux ne compte pas ni lettre \')</p>';
        echo str_word_count('il est à toi l\'machin').'<br>';


        echo '<p>"str_repeat"</p>';
        echo str_repeat('il est à toi ',2).'<br>';


        echo '<p>"str_remplace</p>';
        $texte = ("Bonjour, Salut");
        
        echo str_replace("Bonjour","hello",$texte,$nbr_replace).'<br>';//valeur à remplacer ==> valeur qui remplace ==> variable du contenu ==> nombre de remplacement éffectué
        //str_ireplace pour qu'il soit insensible à la case
        echo $nbr_replace. '<br>';

        $playstation = "PS4";
        $pc = "pc";


        echo '<p>"strtolower" et "strtoupper"</p>';
        echo strtolower($playstation).'<br>';
        echo strtoupper($pc).'<br>';


        echo '<p>"htmlspecialchars" permet de ne pas exécuter le code balise</p>';
        $balise = 'j\'aime le <strong>saucisson !</strong><br>';

        echo $balise;
        echo htmlspecialchars($balise).'<br>';


        echo '<p>"nl2br" permet de conserver les retours à la ligne</p>';
        echo nl2br("je pars,
        vendredi
        samedi
        dimanche");

        echo '<p>"explode" et "str_plit" permet de mettre une chaine de caractère en tableau</p>';
        //1er argument le type de séparateur dans ce cas c'est un espace, ensuite la variable qui contient la chaine
        $ch2tb = "je vais faire un tour";
        $tb2ch = array('Nom', 'Prénom', 'Age');

        print_r(explode(" ",$ch2tb));
        echo '<br><br>';

        print_r(str_split("je vais faire un tour",3));
        echo '<br><br>';

        echo '<p>"implode" permet de mettre un tableau en chaine de caractère</p>';
        print_r($tb2ch);
        echo '<br>';
        echo implode(' ',$tb2ch).'<br>';// le séparateur peut être un caractère


?>
    
</body>
</html>