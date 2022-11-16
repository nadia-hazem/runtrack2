<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour02 Job03</title>
</head>
<body>
    <!--Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
Ex. : IoyaeIaaiIaoa-->

    <h1>Les Tableaux Job03</h1>

    <?php
        $str="I'm sorry Dave I'm afraid I can't do that";
        $voyelles = ["a", "e", "i", "o", "u", "y"];
        $maj= ["A", "E", "I", "O", "U", "Y"];

        for ($i=0; isset($str[$i]); $i++) {
            for ($j=0; isset($voyelles[$j]); $j++) {
                if ($str[$i] == $voyelles[$j] || $str[$i] == $maj[$j]) {
                    echo $str[$i];
                }
            }
        }
    ?>

</body>
</html>