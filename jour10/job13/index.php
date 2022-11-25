<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");

$request = $mysqli->query("select `etage`.`nom` as `nom_etage`, `salles`.`nom` as `Biggest Room`, `salles`.`capacite` as `capacite_salle` from `salles` inner join `etage` on `salles`.`id_etage` = `etage`.`id` where `salles`.`capacite` = (select max(`capacite`) from `salles`");

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
                <th>nom_etage</th>
                <th>Biggest Room</th>
                <th>capacite_salle</th>
            </tr>
        </thead>
        <tbody>
            <?php

                while(($resultat = $request->fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$resultat["nom_etage"]."</td>";
                    echo "<td>".$resultat["Biggest Room"]."</td>";
                    echo "<td>".$resultat["capacite_salle"]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>