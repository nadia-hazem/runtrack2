<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("select `nom`, `prenom`, `naissance` from `etudiants` where `sexe` = 'Femme';");

/* $resultat = $request->fetch_array();
var_dump($resultat);
C:\wamp64\www\runtrack2\jour10\job03\index.php:8:
array (size=6)
    0 => string 'Soriano' (length=7)
    'nom' => string 'Soriano' (length=7)
    1 => string 'Jessica' (length=7)
    'prenom' => string 'Jessica' (length=7)
    2 => string '1995-09-08' (length=10)
    'naissance' => string '1995-09-08' (length=10) */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job03</title>
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
<!--En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez le prenom, le nom et la date de naissance des étudiants de sexe
féminin. Affichez le résultat de cette requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données.-->
    <h1>Jour10 job03 - PHP/SQL </h1>
    <h2>Afficher le prenom, le nom et la date de naissance des étudiants de sexe féminin</h2>
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