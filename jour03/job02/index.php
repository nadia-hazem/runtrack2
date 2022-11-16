<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour02 Job02</title>
</head>
<body>
    <h1>Les Tableaux Job02</h1>
    <!--Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux.
Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.-->

    <?php

    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    for ($i = 0; isset($str[$i]); $i++) {
        if ($i % 2 == 0) {
            echo $str[$i];
        }
    }


    ?>
    
</body>
</html>