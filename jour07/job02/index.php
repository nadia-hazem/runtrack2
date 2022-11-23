<!DOCTYPE html>
<?php
$jour = true;
function bonjour($jour) {

    if ($jour == "true") {
        echo "Bonjour !";
    } else {
        echo "Bonsoir !";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 Job 02 - Jour/Nuit</title>
</head>
<body>
    <h1><?= bonjour($jour); ?></h1>
</body>
</html>