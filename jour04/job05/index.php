<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04 job05</title>
</head>
<body>

<!--Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”.-->

    <h1>Jour04 job05</h1>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Send"></td>
            </tr>
        </table>

    </form>

<?php
    
        if (isset($_POST["user"]) && isset($_POST["password"])) {
            if ($_POST["user"] == "John" && $_POST["password"] == "Rambo") {
                echo "C'est pas ma guerre";
            } else {
                echo "Votre pire cauchemar";
            }
        }
?>
</body>
</html>