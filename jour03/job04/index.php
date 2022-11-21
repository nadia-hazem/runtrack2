
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03 Job04</title>
</head>
<body>
    <!--Créez une variable de type string nommée $str et affectez y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne.-->
    <h1>Les Tableaux Job04</h1>

    <?php
        $str="Dans l'espace, personne ne vous entend crier";
        $count = 0;
        for ($i=0; isset($str[$i]); $i++) {
            $count++;
        }
        echo $count;
    ?>
</body>
</html>