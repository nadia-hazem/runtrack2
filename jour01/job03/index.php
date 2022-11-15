<?php
$bool= true;
$int= 5;
$str= 'Hello LaPlateforme!';
$float= 2.5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour01 - job03</title>
</head>
<body>
    <table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td><?= gettype($bool)?></td>
            <td>bool</td>
            <td><?php echo $bool ?></td>
        </tr>
        <tr>
            <td><?= gettype($int)?></td>
            <td>int</td>
            <td><?= $int ?></td>
        </tr>
        <tr>
            <td><?= gettype($str)?></td>
            <td>str</td>
            <td><?= $str ?></td>
        </tr>
        <tr>
            <td><?= gettype($float)?></td>
            <td>float</td>
            <td><?php echo $float ?></td>
        </tr>
    </table>
</html>