<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03 Job05</title>
</head>
<body>
    <!--Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”..-->
    <h1>Les Tableaux Job05</h1>
<?php
    $str="On n'est pas le meilleur quand on le croit mais quand on le sait";
    $dic=["voyelle" =>0, "consonne" =>0];

    $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    echo $str."<br><br>";
    for ($i=0; isset($str[$i]); $i++) {
        for ($j=0; isset($voyelles[$j]); $j++) {
            if ($str[$i] == $voyelles[$j]) {
                $dic["voyelle"]++;
                break;
            }
            else if ($j == 11 && $str[$i] != " " && $str[$i] != "'" && $str[$i] != "," && $str[$i] != ".") { 
                $dic["consonne"]++;
            }
        }
    }
    ?>

    <table border : 1px>
    <tr>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </tr>
    <tr>
        <td><?php echo $dic["voyelle"]; ?></td>
        <td><?php echo $dic["consonne"]; ?></td>

</body>
</html>