<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre.
Si le nombre est entre 0 et 20 : écrire en italique, si le nombre est compris entre 25
et 50 : souligner.
Afficher “La Plateforme_” à la place de 42.</p>
<?php
    for ($i = 0; $i <= 100; $i++) {
        if ($i === 42) {
            echo "La Plateforme_<br />";
        } else if ($i >= 0 && $i <= 20) {
            echo "<i>$i</i><br />";
        } else if ($i >= 25 && $i <= 50) {
            echo "<u>$i</u><br />";
        } else {
            echo "$i<br />";
        }
    }


?>
</body>
</html>