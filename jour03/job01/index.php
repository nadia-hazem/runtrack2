<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03 Job01</title>
</head>
<body>
    <h1>Les Tableaux Job01</h1>
    <!--Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
comprises dans ce tableau.-->

    <?php

    $tableau = array(200, 204, 173, 98, 171, 404, 459);
    foreach($tableau as $value) {
        if ($value % 2 == 0) {
            echo "$value est paire<br />";
        }
        else {
            echo "$value est impair<br />";
        }
    }
//==============================================

    echo '<br><h3>Autre script</h3>';

    for ($i = 0; isset($tableau[$i]); $i++) {
        if ($tableau[$i] % 2 == 0) {
            echo "$tableau[$i] est paire<br />";
        }
        else {
            echo "$tableau[$i] est impair<br />";
        }
}
    ?>

</body>
</html>