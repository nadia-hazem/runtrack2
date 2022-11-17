<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04 Job01</title>
</head>
<body>
    <!--Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “-->

    <h1>Jour04 Job01</h1>

    <form action="" method="get">
        <table>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td>Prénom :</td>
                <td><input type="text" name="prenom"></td>
            </tr>
            <tr>
                <td>E-mail :</td>
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
            </tr>
        </table>

    </form>

<?php

    $tableau= ["nom", "prenom", "mail"];
    $count= 0;
    
    foreach ( $_GET as $tableau => $val )  { 
        if ( $val != "" ) {
            $count++;
        }
    }

    echo "<br>Le nombre d'argument GET envoyé est : " .$count;




    

?>

    
</body>
</html>