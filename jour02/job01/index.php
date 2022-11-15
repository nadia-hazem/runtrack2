<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour02 Job01</title>
</head>
<body>
<!--Afficher tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre
chaque nombre (<br />).
Le nombre 42 doit être en gras et souligné.-->

    <?php
    for ($i = 0; $i <= 1337; $i++) {
        if ($i === 42) {
            echo "<b><u>$i</u></b><br />";
        } else {
            echo "$i<br />";
        }
    }
    ?>
</body>
</html>