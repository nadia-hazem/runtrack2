<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04 job06</title>
</head>
<body>
<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”.-->

    <h1>Jour04 job06</h1>
    
    <form action="" method="GET">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Send"></td>
            </tr>
        </table>

    </form>

<?php
    
    if (isset($_GET["nombre"])) {
        if ($_GET["nombre"] % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    }
?>
</body>
</html>