<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04 Job02</title>
</head>
<body>
<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.-->

    <h1>Jour04 Job02</h1>

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
<br><br>
    <table border : 1>

        <?php

            if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["mail"])) {
                echo "<tr>";
                echo "<th>Argument</th>";
                echo "<th>Valeur</th>";
                echo "</tr>";
            }
            foreach ( $_GET as $tableau => $val )  { 
                if ( $val != "" ) {
                    echo "<tr>";
                    echo "<td>" . $tableau . "</td>";
                    echo "<td>" . $val . "</td>";
                    echo "</tr>";
                }
            }
    ?>
    </table>



  

</body>
</html>