<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
    <link rel="stylesheet" href="../css/exemple.css">
</head>
<body>
    <h1>Les Array (tableaux)</h1>
    <p>Variable qui stocke plusieurs valeur en même temps</p>


    <h2>Les tableaux numérotés</h2>
    <p>La première valeur commence toujours par la clé numérique 0</p>

    <!-- Index attribué automatiquement -->

    <?php
        $prenom = array('Mehdi', 'Narrkan', 'Moon');
    ?>

    <!-- Index attribué manuelement -->

    <?php
        $prenom1 [0] = 'Mehdi';//[0] = clé / 'Mehdi' = valeur
        $prenom1 [1] = 'Narrkan';
        $prenom1 [2] = 'Moon';
    ?>


    <h2>Les tableaux Associatifs</h2>
    <p>Leur clé sont textuelle</p>

      <?php
        $age = array(
            'Mehdi' => 29,//'Mehdi' = clé / 29 = valeur
            'Narrkan' => 27,
            'Moon' => 'Non comuniqué'
        );
    ?>

    <!-- Index attribué manuelement -->

    <?php
        $age1['Mehdi'] = 29;
        $age1['Narrkan'] = 27;
        $age1['Moon'] = 'Non comuniqué';
    ?>


    <h2>Afficher les valeurs d'un tableau numéroté</h2>

    <h3>Pour une seule valeur "echo"</h3>


      <?php
        echo $prenom[0]. '<br>';
        echo $age['Mehdi']. '<br>';
    ?>


    <h3>Pour plusieurs valeurs "for"</h3>


    <?php
        for($affiche = 0; $affiche <= 2; $affiche ++){
            echo $prenom[$affiche]. '<br>';// affiche moi $prenom avec son index[]
        }
    ?>


    <h3>Pour plusieurs valeurs "for each" (spécialement fait pour les tableaux)</h3>


    <?php
        foreach($age as $affiche1){
            echo $affiche1. '<br>';
        }
    ?>

    <?php
        foreach($age as $clé => $affiche2){// => permet de récupérer également la clé!
            echo 'l\'age de '. $clé. ' est '. $affiche2. '<br>';
        }
    ?>


    <h3>pour afficher le contenu d'un tableau "print_r" (somairement car utilisé  à la base pour du debuguage)</h3>


    <?php
        echo '<pre>'; //astuce magique!! conserve la manière dont le code source à été tapé!!!!! exellent!! :)
        print_r($age);
        echo '</pre>';
    ?>


    <h2>Les tableaux multidimensionelles (imbrications / tableau dans tableau)</h2>

    <p>Le premier index représente la ligne, le deuxieme la colonne</p>


    <?php
        $motos = array(
            array('Sportive', 1000, 'KAWASAKI'),
            array('Supermotard', 450, 'KTM'),
            array('Roadster', 800, 'YAMAHA')
        );

        $motoss = array(

            $sbk = array(
                array(1000,750,500),

                $klo = array(
                    array("yamaha","ducati","HONDA"),
                    array("bleu","rouge","orange")
                )
                
            ),
            $motocross = array(
                array(450,250,125),
                array("husqvarna","yamaha","KTM")
            )
        );

        echo $motoss[1][1][2];
        echo '<br>';
        echo '<pre>';
        print_r($motoss);
        echo '<br>';
        echo '</pre>';
        echo $motoss[0][1][0][2].'<br>';

            
        

       
        echo $motos[0][0]. ' de '. $motos[0][1]. ' cm3'. ' de chez '. $motos[0][2]. '<br>';
        echo $motos[1][0]. ' de '. $motos[1][1]. ' cm3'. ' de chez '. $motos[1][2]. '<br>';
        echo $motos[2][0]. ' de '. $motos[2][1]. ' cm3'. ' de chez '. $motos[2][2]. '<br>'. '<br>';


        for($ligne = 0; $ligne < 3; $ligne++){ //création de la boucle
            $categorie_moto = $ligne+1; //création d'une variable qui prend l'index +1 (pour qu'elle commence a 1 au lieu de 0)
            echo 'Catégorie moto'. $categorie_moto. '<br>'; //1- affichage de l'incrémentation variable qui commence avec l'index +1
            echo '<ul>'; //ouverture de liste

            for($colonne = 0; $colonne < 3; $colonne++){ //création boucle 
                echo '<li>'. $motos[$ligne][$colonne]. '</li>'; //2- affichage de ligne (1er passage)
            }//3- affichage de colonne (3 passages)
            echo '</ul>';//4- fermeture de liste
        }// vers le 2eme passage et ainsi de suite
    ?>










    
</body>
</html>