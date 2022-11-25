<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("SELECT prenom, nom, naissance from etudiants where naissance between '1998-01-01' and '2018-01-01';");

/* $resultat = $request->fetch_array();
var_dump($resultat);
array (size=6)
    0 => string 'Roxan' (length=5)
    'prenom' => string 'Roxan' (length=5)
    1 => string 'Roum�gas' (length=8)
    'nom' => string 'Roum�gas' (length=8)
    2 => string '2016-09-08' (length=10)
    'naissance' => string '2016-09-08' (length=10) */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job12</title>
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
SQL, sélectionnez le prénom, le nom et la date de naissance des étudiants qui sont nés
entre 1998 et 2018. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données.-->
    <h1>Jour10 job12 - PHP/SQL </h1>
    <h2>Afficher le prénom, le nom et la date de naissance des étudiants qui sont nés entre 1998 et 2018</h2>

    <table>
        <thead>
            <tr>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php

                    while(($resultat = $request->fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$resultat["prenom"]."</td>";
                    echo "<td>".$resultat["nom"]."</td>";
                    echo "<td>".$resultat["naissance"]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>