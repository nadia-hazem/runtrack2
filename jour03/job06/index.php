<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03 Job06</title>
</head>
<body>
<!--Créez une variable de type string nommée $str et affectez y le texte :
“Les choses que l'on possède finissent par nous posséder."
Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL-->
    <h1>Les Tableaux Job06</h1>

<?php
    echo 'Les choses que l\'on possède finissent par nous posséder.<br><br>';

    $str="Les choses que l'on possède finissent par nous posséder.";
    $count = 0;
    for ($i=0; isset($str[$i]); $i++) {
        $count++;
    }
    for ($j=$count-1; $j >= 0; $j--) {  // $j = $count-1 car on commence à 0 pour eviter l'erreur offset
        echo $str[$j];
    }
?>
</body>
</html>