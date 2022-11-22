<!DOCTYPE html>
<?php
$str = "les chaussettes de l'archi-duchesse sont-elles seches archi-seches ?";
$char = "s";
    function occurrences($str, $char)
    {
        $occurrences = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == $char) {
                $occurrences++;
            }
        }
        return $occurrences;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 job05 - occurrences</title>
</head>
<body>
    <?php 
        $result = occurrences($str, $char);
        echo $result;
    ?>
</body>
</html>