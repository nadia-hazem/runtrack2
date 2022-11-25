<?php

$mysqli = new mysqli("localhost", "root", "", "jour09");
$request = $mysqli->query("select * from etudiants");

/* $resultat = $request->fetch_array();
var_dump($resultat);
array (size=12)
    0 => string '1' (length=1)
    'id' => string '1' (length=1)
    1 => string 'Cyril' (length=5)
    'prenom' => string 'Cyril' (length=5)
    2 => string 'Zimmermann' (length=10)
    'nom' => string 'Zimmermann' (length=10)
    3 => string '1989-01-02' (length=10)
    'naissance' => string '1989-01-02' (length=10)
    4 => string 'Homme' (length=5)
    'sexe' => string 'Homme' (length=5)
    5 => string 'cyril@laplateforme.io' (length=21)
    'email' => string 'cyril@laplateforme.io' (length=21) */


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10 job01</title>
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
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données.-->
    <h1>Jour10 job01 - PHP/SQL </h1>
    <h2>Afficher l’ensemble des informations de la table etudiants</h2>

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