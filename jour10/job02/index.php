<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("select * from salles");

/* $resultat = $request->fetch_array();
var_dump($resultat);
C:\wamp64\www\runtrack2\jour10\job02\index.php:8:
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
    <title>Jour10 job02</title>
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
requête SQL, récupérez le nom et la capacité de chacune des salles. Affichez le résultat
de cette requête dans un tableau html. La première ligne de votre tableau html doit
contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données.-->
    <h1>Jour10 job02 - PHP/SQL </h1>
    <h2>Afficher le nom et la capacité de chacune des salles</h2>

    <table>
        <thead>
            <tr>
                <th>nom</th>
                <th>capacite</th>
            </tr>
        </thead>
        <tbody>
            <?php

                while(($resultat = $request->fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$resultat["nom"]."</td>";
                    echo "<td>".$resultat["capacite"]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>