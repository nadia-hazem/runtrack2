<?php
    session_start();
/*     if (isset($_SESSION["nbvisites"])) {
        $_SESSION["nbvisites"]++;
    } else {
        $_SESSION["nbvisites"] = 0;
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
</head>
<body>
<?php

    echo "Vous avez visité cette page " . $_SESSION["nbvisites"] . " fois.";
?>
    <form action="" method="post">
        <input type="submit" name="reset" value="reset">
    </form>

<?php
    if (isset($_POST['reset'])) {
        $_SESSION['nbvisites'] = 0;
    }
?>

</body>
</html>
