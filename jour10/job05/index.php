<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("select * from `etudiants` where `naissance` > '2004-01-01';");

/* $resultat = $request->fetch_array();
var_dump($resultat);
C:\wamp64\www\runtrack2\jour10\job05\index.php:8:
array (size=12)
    0 => string '3' (length=1)
    'id' => string '3' (length=1)
    1 => string 'Roxan' (length=5)
    'prenom' => string 'Roxan' (length=5)
    2 => string 'Roum�gas' (length=8)
    'nom' => string 'Roum�gas' (length=8)
    3 => string '2016-09-08' (length=10)
    'naissance' => string '2016-09-08' (length=10)
    4 => string 'Homme' (length=5)
    'sexe' => string 'Homme' (length=5)
    5 => string 'roxan@laplateforme.io' (length=21)
    'email' => string 'roxan@laplateforme.io' (length=21) */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job05</title>
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
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données.-->
    <h1>Jour10 job05 - PHP/SQL </h1>
    <h2>Afficher les étudiants qui ont moins de 18 ans</h2>
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