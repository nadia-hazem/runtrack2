<!DOCTYPE html>
<?php


    function occurrences($str, $char)
    {
        $occurrences = 0;
        for ($i =0; isset($str[$i]); $i++) 
        {
            if ($str[$i] == $char) {
                $occurrences++;
            }
        }
        return $occurrences;
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 job05 - occurrences</title>
    <style type="text/css">
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        form {
            width: 50%;
        }
        input {
            border: 1px solid #7D7D7D;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="" method="get">
            <div class="row">
                <label for="str">Saisir une phrase</label><br><input type="text" name="str"><br>
            </div>
            <label for="char">Saisir un caractère</label><br><input type="text" name="char"><br>
            <input type="submit" value="Submit"><br>

            <?php 
            if (isset($_GET["str"]) && isset($_GET["char"])) {
                $str = $_GET["str"];
                $char = $_GET["char"];
                $result = occurrences($str, $char);
                echo $result;
            }
            ?>
        </form>

    </div>
</body>
</html>
