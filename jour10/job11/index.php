<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("select avg(`capacite`) from `salles` ;");

/* $resultat = $request->fetch_array();
var_dump($resultat);
array (size=2)
    0 => string '40.6667' (length=7)
    'avg(`capacite`)' => string '40.6667' (length=7) */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job11</title>
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
SQL, sélectionnez la capacité moyenne des salles. Affichez le résultat de cette requête
dans un tableau html. La première ligne de votre tableau html doit contenir le nom des
champs. Les suivantes doivent contenir les données présentes dans votre base de
données.-->
<h1>Jour10 job11 - PHP/SQL </h1>
<h2>Afficher la capacité moyenne des salles</h2>
    <table>
        <thead>
            <tr>
                <th>capacite</th>
            </tr>
        </thead>
        <tbody>
            <?php

                while(($resultat = $request->fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$resultat["avg(`capacite`)"]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>