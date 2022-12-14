<?php
    if (isset($_POST['prenom'])) {
        setcookie('prenom', $_POST['prenom'], time() + 3600);
        $_COOKIE['prenom'] = $_POST['prenom'];
    }

    if (isset($_POST['deco'])) 
    {
        setcookie('prenom', '', time() - 3600);
        $_COOKIE['prenom'] = null;
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08 job04</title>
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
    <!--Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion.-->

    <div class="center">

        <?php
        if (isset($_COOKIE['prenom'])) {
            echo "Bonjour " . $_COOKIE['prenom'] . " !";
            echo '<br><br>';
            echo "<form method='post'>
            <form method='post'>
                <input type='submit' name='deco' value='Déconnexion'>
            </form>";
        } else {

            echo "<form action='' method='post'>
            <input type='text' name='prenom'>
            <input type='submit' name='connexion' value='connexion'>
            </form>";
        }
        ?>
    </div>
</body>
</html>