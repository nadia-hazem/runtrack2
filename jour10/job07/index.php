<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("select sum(`superficie`) from `etage`;");

/* $resultat = $request->fetch_array();
var_dump($resultat);
C:\wamp64\www\runtrack2\jour10\job07\index.php:8:
array (size=2)
    0 => string '1000' (length=4)
    'sum(`superficie`)' => string '1000' (length=4) */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job07</title>
    <style>
        h1, h2 {
            margin-left: 50px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
<!--En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez la superficie totale des étages dans une colonne nommée
“superficie_totale”. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données.-->
    <h1>Jour10 job07 - PHP/SQL </h1>
    <h2>Afficher la superficie totale des étages</h2>
        <table>
            <thead>
                <tr>
                    <th>superficie_totale</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    while(($resultat = $request->fetch_array()) != null){
                        echo "<tr>";
                        echo "<td>".$resultat["sum(`superficie`)"]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>