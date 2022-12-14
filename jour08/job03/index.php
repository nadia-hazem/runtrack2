<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08 job03</title>
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
    <!--Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.-->
</body>

    <div class="center">
        <form action="" method="post">
            <input type="text" name="prenom">
            <input type="submit" name="submit" value="Valider">
        </form>
        
        <?php
        
        if (isset ($_POST['prenom'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $_SESSION['prenom'] [] = $_POST['prenom'];
        } else {
            echo "<br><br>";
            echo "Veuillez saisir un prénom";
        }

        ?>

        <ul>   
            <?php

            if (isset($_SESSION['prenom'])) {
                foreach ($_SESSION['prenom'] as $index => $value) {
                    echo "<li>" . $value . "</li>";
                }
            }

            ?>
        </ul>

        <form action="" method="post">
            <input type="submit" name="reset" value="reset">
        </form>
        <?php

        if (isset($_POST['reset'])) {
            unset($_SESSION['prenom']);
        }
        ?>

    </div>
</html>