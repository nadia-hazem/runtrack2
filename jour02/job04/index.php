<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour02 Job04</title>
</head>
<body>
<!-- Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
et en remplaçant certains nombres par un mot selon les conditions suivantes :
● Si le nombre est un multiple de 3, affichez “Fizz”.
● Si le nombre est un multiple de 5, affichez “Buzz”.
● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”. -->

<?php
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 3 && $i % 5 === 0) {
            echo "FizzBuzz<br />";
        } else if ($i % 3 === 0) {
            echo "Fizz<br />";
        } else if ($i % 5 === 0) {
            echo "Buzz<br />";
        } else {
            echo "$i<br />";
        }
    }

    ?>
</body>
</html>