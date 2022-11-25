<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");

$request = $mysqli->query("SELECT `salles` . `nom` , `etage` . `nom` FROM `salles` INNER JOIN `etage` ON `salles` . `id_etage` = `etage` . `id`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job13</title>
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
SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
doit contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données.-->
        <table>
            <thead>
                <tr>
                    <th>Salle</th>
                    <th>Etage</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while(($resultat = $request->fetch_array()) != null){
                        echo "<tr>";
                        echo "<td>".$resultat[0]."</td>";
                        echo "<td>".$resultat[1]."</td>";
                        echo "</tr>";
                    }
                    
                ?>
            </tbody>
        </table>
</body>
</html>