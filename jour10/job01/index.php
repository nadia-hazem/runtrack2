<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");

$request = $mysqli->query("select * from etudiants");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job01</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <!--En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données.-->
    <table>
        <thead>
            <tr>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
                <th>sexe</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php

                while(($resultat = $request->fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$resultat["prenom"]."</td>";
                    echo "<td>".$resultat["nom"]."</td>";
                    echo "<td>".$resultat["naissance"]."</td>";
                    echo "<td>".$resultat["sexe"]."</td>";
                    echo "<td>".$resultat["email"]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>