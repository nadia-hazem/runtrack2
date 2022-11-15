<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour02 Job05</title>
</head>
<body>
<!--Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre-->

<?php

// boucle de 0 à 99
echo '<br>Nombres premiers de 0 à 1000 :<br> ';
for ($i = 1; $i <= 1000; $i++) {

    for ($j = 2; $j < $i; $j++) {
        //test du quotien de la division
        if ($i % $j == 0) {
            break;
        }
        else if ($j === $i-1) {
            echo "$i<br />";
        }

    }
}

?>

</body>
</html>