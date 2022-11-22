<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour06 job05</title>

    <?php
        if (isset($_GET ['style'] ) ) {
            $choice = $_GET['style'];

            if ($choice != "") {
                echo "<link rel='stylesheet' type='text/css' href='css/$choice.css'>";
            }
            else {
            echo "<link rel='stylesheet' type='text/css' href='css/style1.css'>";
            } 
        }
        else {
            echo "<link rel='stylesheet' type='text/css' href='css/style1.css'>";
        }

        ?>
</head>
<body>



    <div class="listbox">
        <form>
            <SELECT name="style" size="1">
            <option selected="selected">Selectionnez un style</option>
            <OPTION value="style1">Style 1</OPTION>
            <OPTION value="style2">Style 2</OPTION>
            <OPTION value="style3">Style 3</OPTION>
            </SELECT>
            <INPUT type="submit" value="Valider">
</form>
    </div>

<div id="main">

  <h1>Page test</h1>

</div>


</body>
</html>