<?php
$str='LaPLateforme ';
$str2='Vive ';
$str3=' !';
$val=6;
$myBool=true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour01 - job01</title>
    </head>
    <body>
        <h1>Jour01 - job01</h1>

        <?php echo $str ?>
        <br><br>
        <h1><?php echo $str2, $str, $str3 ?></h1>
        <br>
        <p>Le contenu de la variable est : <?php echo $val ?></p>
        <p>La variable + 4 = <?php echo $val + 4 ?></p>
        <br>
        <?php echo $myBool ?>

    </body>
</html>