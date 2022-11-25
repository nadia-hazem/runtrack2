<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");

$request = $mysqli->query("select * from `salles` order by `capacite` desc;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job09</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
<!--En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
décroissante. Affichez le résultat de cette requête dans un tableau html. La première
ligne de votre tableau html doit contenir le nom des champs. Les suivantes doivent
contenir les données présentes dans votre base de données.-->
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