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
    <style type="text/css">
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <form>
            <div class="row">
                <label for="sentence">Saisir une phrase</label><br>
                <input type="text" name="str"><br>
                <input type="submit" value="Valider">
            </div>
        </form>
        <?php
        $str = $_GET["str"];
        $result = leetSpeak($str);
        echo $result;
        ?>
    </div>
</body>
</html>

