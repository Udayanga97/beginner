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
    
</body>
</html>