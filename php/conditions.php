<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Conditions</title>
    <link rel="stylesheet" href="../css/exemple.css">
</head>

<body>

    <h2>Les comparaisons</h2>

    <ul>
        <li>== : égal (dans une condition)</li>
        <li>=== : égal et du même type</li>
        <li>!= : diffférent de</li>
        <li>!== : différent ou pas du même type</li>
        <li>< : stictement inférieur</li> 
        <li>> : strictement supérieur</li>
        <li>>= : supérieur ou égal</li>
        <li><= : inférieur ou égal</li> 
        <li><=> : inférieur égal ou supérieur</li>
    </ul>

    <h2>Opérateurs logiques</h2>

    <ul>
        <li>and / && : et</li>
        <li>or / || : ou</li>
        <li>xor : xor (si deux variables sont true, mais pas en même temps</li>
        <li>! : non (true si true ne l'est pas / on teste le contraire)</li>
    </ul>

    <h2>Conditions</h2>

    <h3>if, if else, if elseif else</h3>


    <?php
        $date_actuelle = new DateTime();// pour afficher la date actuelle
        $date_anniversaire = new DateTime("22-11-1989");// pour afficher la date voulue /!\ préciser le format dans l'echo
        $heure_actuelle = date("H:i");// pour afficher l'heure actuelle
        $heure_choisie = date("10:23");// pour afficher l'heure voulue
        

        echo 'Voici l\'heure actuelle '.$heure_actuelle. ' et la date du jour '.$date_actuelle->format('d-m-Y'). '<br>';
        
        
        if ($heure_actuelle < $heure_choisie){// comparaison d'infériorité
            echo 'Travail encore !'. '<br>';
        }
        if ($heure_actuelle == $heure_choisie){// comparaison d'égalité
            echo 'bug dans la matrice'. '<br>';
        }
        else{// pas de variable dans le else, c'est le cas par défaut
            echo "Tu as bien travaillé maintenant go dodo !". "<br>";
        }
        
        
       if ($date_actuelle >= $date_anniversaire){// comparaison de supériorité ou égal
            echo "date valide"."<br>";
            $mytho = "non";
        }
        elseif($date_actuelle < $date_anniversaire){
            echo "Le voyage dans le temps existe ??! depuis quand ?!". "<br>";
            $mytho = "oui";
        }
        else{
            echo "Format de date invalide". "<br>";
        }

        echo 'Est-il menteur ? je confirme que '. $mytho. '<br>';
    

        echo $date_anniversaire->format('d-m-Y'). '<br>';// l'echo d'une date s'affichera uniquement avec le type de format choisi : ->format("")


        echo '<h2>Le Switch</h2> <p>/!\ Le switch compare uniquement des égalités! /!\</p>';// exemple de balise écrit dans le php

        $moto = "enduroo";

        switch($moto){

            case "roadster" :
                echo "Moto parfaite pour la ville, bon angle de braquage";
                break;
            case "sportive" :
                echo "Idéal sur piste";
                break;
            case "routière" :
                echo "Convient à la perfection pour les grande distance";
                break;
            case "enduro" :
                echo "Polyvalentesur piste et route";
                break;
            default :// équivalent au else
                echo "Je ne peux te donner plus d'informations sur cette catégorie de moto";
                break;   
        }

        echo '<h2>Booleen</h2>';

        $motard = true;
        $skater = true;

        if ($motard){// correspond à faire :   if ($motard == true);
            echo "Tu es motard";
        }
        else{
            echo "tu n'es pas motard";
        }

        echo '<p>test de false</p>';

        if (!$skater){
            echo "Tu n'es pas skater";
        }
        else{
        ?><!-- astuce pour écrire du code html dans du php-->
            <p style="color:green;">Voici l'astuce pour du pur code html dans du php</p>
            <p>Tu es skater</p>
            <h2>Ternaire</h2>
        <?php
        }

        // $bonnet_de_bain = true;

        // if($bonnet_de_bain){
        //     $autorisation = true;
        //     echo "tu peux entrer";
        // }
        // else{
        //     $autorisation = false;
        //     echo "accès refusé";
        // }
        
        //Voici la version ternaire

        $bonnet_de_bain = true;
        $autorisation = "";

        $autorisation = ($bonnet_de_bain) ? "autorisé" : "refusé";

        echo $autorisation;


    ?>



</body>

</html>