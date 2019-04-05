<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Variables</title>
</head>

<body>
    <h2>Les variables PhP</h2>

    <?php
        $departement = "Yvelines"; // variable de type: string (chaine de caractère)
        $departement_num = 78; // variable de type: int (integer / entier) 
        $pi = 3.14; // variable de type: floats (décimaux)
        $booleen = false; // variable de type booleen (true ou false) par default une variable est de type true
        $en_attente; // variable de type: null

        echo $departement. '<br>'; // la concaténation se fait par un point dès que l'on change de type d'élément
        echo $pi.'<br>';
    ?>
    <h2>Les opérations</h2>


    <?php
        $nbr1 = 8;
        $nbr2 = 5;
        $nbr3 = -3;

        $addition = $nbr1+$nbr2;
        $soustraction = $nbr1-$nbr2;
        $multiplication = $nbr1*$nbr2;
        $division = $nbr1/$nbr2;
        $modulo = $nbr1%$nbr2;

        echo 
        $addition. '<br>'. 
        $soustraction. '<br>'. 
        $multiplication. '<br>'. 
        $division. '<br>'. 
        $modulo. '<br>';

        // /!\ Une nouvelle valeur de variable écrase l'ancienne
    ?>

</body>

</html>