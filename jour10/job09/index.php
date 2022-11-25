<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("select * from `salles` order by `capacite` desc;");

/* $resultat = $request->fetch_array();
var_dump($resultat);
array (size=8)
    0 => string '1' (length=1)
    'id' => string '1' (length=1)
    1 => string 'Lounge' (length=6)
    'nom' => string 'Lounge' (length=6)
    2 => string '1' (length=1)
    'id_etage' => string '1' (length=1)
    3 => string '100' (length=3)
    'capacite' => string '100' (length=3) */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job09</title>
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
SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
décroissante. Affichez le résultat de cette requête dans un tableau html. La première
ligne de votre tableau html doit contenir le nom des champs. Les suivantes doivent
contenir les données présentes dans votre base de données.-->
    <h1>Jour10 job09 - PHP/SQL </h1>
    <h2>Afficher les salles par capacité décroissante</h2>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>id_etage</th>
                    <th>capacite</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    while(($resultat = $request->fetch_array()) != null){
                        echo "<tr>";
                        echo "<td>".$resultat["id"]."</td>";
                        echo "<td>".$resultat["nom"]."</td>";
                        echo "<td>".$resultat["id_etage"]."</td>";
                        echo "<td>".$resultat["capacite"]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>