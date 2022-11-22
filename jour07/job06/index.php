<!DOCTYPE html>
<?php
    function leetSpeak($str) {
        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] == "A" || $str[$i] == "a") { $str[$i] = "4"; }
            if ($str[$i] == "B" || $str[$i] == "b") { $str[$i] = "8"; }
            if ($str[$i] == "E" || $str[$i] == "e") { $str[$i] = "3"; }
            if ($str[$i] == "G" || $str[$i] == "g") { $str[$i] = "6"; }
            if ($str[$i] == "L" || $str[$i] == "l") { $str[$i] = "1"; }
            if ($str[$i] == "S" || $str[$i] == "s") { $str[$i] = "5"; }
            if ($str[$i] == "T" || $str[$i] == "t") { $str[$i] = "7"; }
        }
        return $str;
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 job06 - leetSpeak</title>
</head>
<body>
    <?php
        $str = "Les chaussettes de l'archi-duchesse sont-elles seches archi-seches ?";
        $result = leetSpeak($str);
        echo $result;

    ?>
</body>
</html>