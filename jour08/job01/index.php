<?php
    session_start();
/*     if (isset($_SESSION["nbvisites"])) {
        $_SESSION["nbvisites"]++;
    } else {
        $_SESSION["nbvisites"] = 1;
    } */
    isset($_SESSION["nbvisites"]) ? $_SESSION["nbvisites"]++ : $_SESSION['nbvisites'] = 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08 job01</title>
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
    <div class="center">
        <hr>
        <?php
            echo "<hr>";
            if (isset($_POST['reset'])) {
                $_SESSION['nbvisites'] = 1;
            }
            echo "Vous avez visité cette page " . $_SESSION["nbvisites"] . " fois";
            echo "<br><br>";
        ?>
        <form method="post">
            <input type="submit" name="reset" value="Réinitialiser">
        </form>
    </div>
</body>
</html>
