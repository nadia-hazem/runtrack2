<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04 Job03</title>
</head>
<body>
<!-- Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :-->

    <h1>Jour04 Job03</h1>

<?php
    
        $tableau= ["nom", "prenom", "mail"];
        $count= 0;
        
        foreach ( $_POST as $tableau => $val )  { 
            if ( $val != "" ) {
                $count++;
            }
        }
    
        echo "<br>Le nombre d'argument POST envoyé est : " .$count;
?>
<br><br>
    <form action="" method="post">
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
</body>
</html>