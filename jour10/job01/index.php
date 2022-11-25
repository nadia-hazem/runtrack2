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
</head>
<body>
    <table border="solid">
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