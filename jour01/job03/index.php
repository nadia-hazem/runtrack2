<?php
$boolean= true;
$int= 5;
$string= 'Hello LaPlateforme!';
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
            <td>Boolean</td>
            <td>boolean</td>
            <td><?php echo $boolean ?></td>
        </tr>
        <tr>
            <td>Integer</td>
            <td>int</td>
            <td><?= $int ?></td>
        </tr>
        <tr>
            <td>String</td>
            <td>string</td>
            <td><?= $string ?></td>
        </tr>
        <tr>
            <td>Float</td>
            <td>float</td>
            <td><?php echo $float ?></td>
        </tr>
    </table>
</html>