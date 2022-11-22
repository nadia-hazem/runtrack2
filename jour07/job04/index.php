<!DOCTYPE html>

<?php

    $a = 4;
    $b = 5;
    $operation = "+";
    function calcul($a, $operation, $c)
    {
        if ($operation == "+") {
            return $a + $c;
        } elseif ($operation == "-") {
            return $a - $c;
        } elseif ($operation == "*") {
            return $a * $c;
        } elseif ($operation == "/") {
            return $a / $c;
        } elseif ($operation == "%") {
            return $a % $c;
        } else {
            return "Erreur";
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>Jour07 Job 04 - calcul</title>
</head>
<body>
    <?= calcul($a, $operation, $b) ?>
</body>
</html>