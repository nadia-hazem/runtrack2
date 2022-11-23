<!DOCTYPE html>
<?php

function getHello() {
    return "Hello LaPlateforme !";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 Job 03 - GetHello</title>
    <style type="text/css" >
        body {
            background-color: #000;
            color: #fff;
            text-align: center;
            margin: 10em auto 0;
            width: 50%;
            border: 5px solid #fff;
            padding: 10px;
        }
    </style>

</head>
<body>

<?php

$str = getHello();
echo "<h1>" . $str . "</h1>";  

?>

</body>
</html>