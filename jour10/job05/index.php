<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");

$request = $mysqli->query("select * from `etudiants` where `naissance` > '2004-01-01';");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job05</title>
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
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données.-->
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