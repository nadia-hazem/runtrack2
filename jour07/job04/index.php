<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 job04 - Calculette</title>
    <style>
        .center {text-align: center;}
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
            margin: 0 auto;
            margin-top: 10em;
        }
        form {
            background: #f8ffff;
            padding: 2em;
            border: 1px solid #7D7D7D;
        }
        input {
            margin: 5px;
        }
        h2, p {text-align: center;}
        .right {float: right;}
        .line {text-decoration: line-through;}
    </style>
</head>

<body>
    <div class="container">
        <h1>Calculatrice <span class="line">de poche</span></h1>
        <form action = "" method = "POST">
            <input type = "text" name = "a" size = "10">
            <select name = "operation">
                <option value = "+">+</option>
                <option value = "-">-</option>
                <option value = "*">*</option>
                <option value = "/">/</option>
                <option value = "%">%</option>
            </select>
            <input type = "text" name = "b" size = "10">
            <hr />
            <input type = "submit" value = "Calculer">
            <input type = "reset" value = "Effacer" class="right">
        </form>
    </div>
</body>
</html>

<?php

if(isset($_POST['a'])&& isset($_POST['b'])&& isset($_POST['operation']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operation = $_POST['operation'];
    
    if( $a != "0" && $b != "0" ) 
    {
        if( $operation != "0" )
        {
            switch( $operation )
            {
                case "+" : $result = $a + $b; break;
                case "*" : $result = $a * $b; break;
                case "-" : $result = $a - $b; break;
                case "/" : $result = $a / $b; break;
                case "%" : $result = $a % $b; break;
            }
            echo "<br>";
            echo( "<p>Résultat : </p><h2> $result</h2>");
        }
    }
    else
    {
        echo( "erreur ");
    }    
}
?>
