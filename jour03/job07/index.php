<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03 Job07</title>
</head>
<body>
<!--Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c-->

    <h1>Les Tableaux Job07</h1>

    <?php
        echo "Certaines choses changent, et d'autres ne changeront jamais.<br><br>";

        $str="Certaines choses changent, et d'autres ne changeront jamais.";
        for ($i = 1; isset($str[$i]); $i++) {
            echo $str[$i];
        }
        echo $str[0];
    ?>
</body>
</html>