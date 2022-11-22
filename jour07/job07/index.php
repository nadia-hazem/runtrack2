<!DOCTYPE html>
<?php

function gras($str) {
    $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $j = 0;
    $mot = "";
    echo $str;
    echo '<br>';
    for ($i = 0; isset($str[$i]); $i++) {
        if ( $str[$i] == " ") {
            $mot[$j] = $str[$i];
            for ($k = 0; isset($maj[$k]); $k++) {
                if ($mot[0] == $maj[$k]) {
                    echo "<b>$mot</b>";
                    $mot = "";
                    $j = 0;
                    break;
                }
                else if ($k == 25) {
                    echo $mot;
                    $mot = "";
                    $j = 0;
                    break;
                }
            } 
        }
        else {
            $mot[$j] = $str[$i];
            $j++;
        }

    }
    for ($k = 0; isset($maj[$k]); $k++) { //pour le dernier mot
        if ($mot[0] == $maj[$k]) {
            echo "<b>$mot</b>";
            $mot = "";
            $j = 0;
            break;
        }
        else if ($k == 25) {
            echo $mot;
            $mot = "";
            $j = 0;
            break;
        }
    } 
}


    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 job07 - HardForm</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <input type="text" name="str" placeholder="Ceci est une phrase à sens unique. Et, elle ne va nulle part">
            <SELECT name="fonction" size="1">
            <option selected="selected">Selectionnez une fonction</option>
                <option value="gras">gras</option>
                <option value="cesar">cesar</option>
                <option value="plateforme">plateforme</option>
            </select>
            <input type="submit" value="Valider">
    </div>
    <?php 
        
    if (isset($_POST ['fonction']) && isset($_POST ['str'])) {
        $choice = $_POST['fonction'];
        $str = $_POST['str'];
        if ($choice == "gras") {
            gras($str);
        }
        else if ($choice == "cesar") {
            cesar($str, $decalage);
        }
        else if ($choice == "plateforme") {
            plateforme($str);
        }

    }

    ?>
</body>
</html>