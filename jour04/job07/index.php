<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04 job07</title>
</head>
<body>

<!-- Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :

Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
la maison qui s’affiche sur la page doit ressembler à ceci :-->

    <h1>Jour04 job07</h1>

    <form action="" method="GET">
        
                <p>Saisir une hauteur</p>
                <input type="text" name="hauteur" value="0">            
                <p>Saisir une largeur</p>
                <input type="text" name="largeur" value="0"><br>
                <input type="submit" value="OK" />
    </form>
<pre><?php
 
if(isset($_GET['hauteur']) && isset($_GET['largeur'])){
    $h = $_GET['hauteur'];
    $l = $_GET['largeur'];
    echo"<br>";
    echo "hauteur: " . $h . "<br />";
    echo "largeur: " . $l . "<br />";
}
$b = $l/2;
/* for ($i = 0; $i < $h; $i++) { */

    for ($i = 0; $i < $b; $i++) {   // le toit
        for ($j = $b; $j > $i + 1; $j--) {
            echo "&nbsp;" ; 
        }
        echo "/";
        for ($j = 0; $j < $i; $j++) {
            echo "__";
/*             echo $j; */
        }
        echo "\\";
/*         echo $i; */
        echo "<br>";
    }
    for ($i = 0; $i < $h; $i++) { //la maison
        echo '|';
        if ($i == $h - 1 ) {
            for ($j = 0; $j < $l; $j++) {
                echo '_';
            }
        } else {
            for ($j = 0; $j < $l; $j++) {
                echo "&nbsp";
            }
        }
        echo '|';

        echo "<br>";
    }


?></pre>
</body>
</html>