<!DOCTYPE html>
<?php

function getHello() {
    return "Hello LaPlateforme!";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 Job 03 - GetHello</title>
</head>
<body>

    <?php
    $str = getHello();
    echo $str;    
    ?>
</body>
</html>