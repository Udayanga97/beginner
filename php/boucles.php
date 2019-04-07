<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles</title>
    <link rel="stylesheet" href="../css/exemple.css">
</head>
<body>
<h1>Les Boucles</h1>

<h2>while (tant que / exécute un code tant que la condition est vérifié)</h2>

<p>Vérification ==> si valide ==> exécution</p>


<?php
    $no_id = 0;

    while($no_id <= 9){
        echo 'Voici : '. $no_id. '<br>';
        $no_id++;// Variable =+ 1 à chaque tour dans la boucle
    }
?>


<h2>Do while (Faire tant que)</h2>

<p>Éxécution même si  la condition est fausse</p>

<?php
    $no_id1 = 0;
    do{
        echo 'Voici : '. $no_id1. '<br>';
        $no_id1++;
    }
    while($no_id1 <= -9);
?>


<h2>For (pour)</h2>

<p>Initialisation (je choisis la valeur de départ) ==> condition (je pose ma condition) ==> incrémentation (j'incrémente)</p>

<?php
    for($no_id2 = 6; $no_id2 <=9; $no_id2++){
        echo 'Voici : '. $no_id2. '<br>';
    }
?>

<h2>For each (pour chaque) fontionne avec de variables de types Array (tableau) ou objet</h2>

    
</body>
</html>