<?php
    
    if (isset($_COOKIE["nbvisites"])) {
        setcookie("nbvisites", $_COOKIE["nbvisites"] +1, time() + 3600);
    } else {
        setcookie("nbvisites", "1", time() + 3600);
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08 job02</title>
    <style>
        .center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 20%;
            height: 30%;
            margin: 10% auto;
            color: #7D7D7D;
            border-radius: 10px;
            padding: 5%;
            background: aliceblue;
        }
    </style>
</head>
<body>
    <!--Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.-->

    <div class="center">
        <?php
            // Afficher un cookie

            if (isset($_POST['reset'])) {
                setcookie('nbvisites', '1', time() + 3600);
                $_COOKIE['nbvisites'] = 1;
            }
            echo "Vous avez visité cette page " . $_COOKIE['nbvisites'] . " fois. <br><br>";
        ?>
        <form action="" method="post">
            <input type="submit" name="reset" value="reset">
        </form>
    </div>

</body>
</html>