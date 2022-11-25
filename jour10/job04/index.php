<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("select * from `etudiants` where `prenom` like 'T%';");

/* $resultat = $request->fetch_array();
var_dump($resultat);
C:\wamp64\www\runtrack2\jour10\job04\index.php:8:
array (size=12)
    0 => string '7' (length=1)
    'id' => string '7' (length=1)
    1 => string 'Terry' (length=5)
    'prenom' => string 'Terry' (length=5)
    2 => string 'Cristinelli' (length=11)
    'nom' => string 'Cristinelli' (length=11)
    3 => string '2005-02-01' (length=10)
    'naissance' => string '2005-02-01' (length=10)
    4 => string 'Homme' (length=5)
    'sexe' => string 'Homme' (length=5)
    5 => string 'terry@laplateforme.io' (length=21)
    'email' => string 'terry@laplateforme.io' (length=21) */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job04</title>
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
SQL, récupérez l’ensemble des informations des étudiants dont prenom commence par
un “T”. Affichez le résultat de cette requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données.-->
    <h1>Jour10 job04 - PHP/SQL </h1>
    <h2>Afficher les étudiants dont prenom commence par un “T”</h2>
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