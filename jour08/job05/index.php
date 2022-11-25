<?php

session_start();

function table_case($joueur_case = false, $position = false, $joueur_actuel = false) {
    if(!$position && !$joueur_actuel && $joueur_case) {
        if($joueur_case == 1) {
            return ' X ';
        }
        elseif($joueur_case == 2) {
            return ' O ';
        }
        else {
            return 'false';
        }
    }
    elseif($position && $joueur_actuel) {
        return '<a href="?joueur='.$joueur_actuel.'&case='.$position.'"> &nbsp; - &nbsp;</a>';
    }
    else {
        return ' - ';
    }
}

function joueur_suivant($joueur) {
    if($joueur == 1) {
        return 2;
    }
    elseif($joueur == 2) {
        return 1;
    }
}

function table_case_partie_finie($ligne, $colonne) {
        echo '<td>';
        if($_SESSION['morpion']['tableau'][$ligne][$colonne] == table_case(null, $ligne.','.$colonne, $_SESSION['morpion']['joueur_actuel'])) {
            echo table_case();
        }
        else {
            echo $_SESSION['morpion']['tableau'][$ligne][$colonne];
        }
        echo '</td>';
}

if(isset($_GET['nouvelle_partie'])) {
    unset($_SESSION['morpion']);
    header('Location: index.php');
}

if(!isset($_SESSION['morpion']['partie_commencee'])) {
    $_SESSION['morpion']['partie_commencee'] = true;
    $_SESSION['morpion']['partie_finie'] = false;
    $_SESSION['morpion']['gagnant'] = false;
    $_SESSION['morpion']['joueur_actuel'] = 1;
    $_SESSION['morpion']['tableau'] = array(
    1 => array(1 => table_case(null, '1,1', $_SESSION['morpion']['joueur_actuel']), 2 => table_case(null, '1,2', $_SESSION['morpion']['joueur_actuel']), 3 => table_case(null, '1,3', $_SESSION['morpion']['joueur_actuel'])), 
    2 => array(1 => table_case(null, '2,1', $_SESSION['morpion']['joueur_actuel']), 2 => table_case(null, '2,2', $_SESSION['morpion']['joueur_actuel']), 3 => table_case(null, '2,3', $_SESSION['morpion']['joueur_actuel'])), 
    3 => array(1 => table_case(null, '3,1', $_SESSION['morpion']['joueur_actuel']), 2 => table_case(null, '3,2', $_SESSION['morpion']['joueur_actuel']), 3 => table_case(null, '3,3', $_SESSION['morpion']['joueur_actuel'])));
    header('Location: index.php');
}

if(isset($_GET['joueur'], $_GET['case'])) {
    $joueur = $_GET['joueur'];
    $case = $_GET['case'];
    list($ligne, $colonne) = explode(',', $case);
    $_SESSION['morpion']['tableau'][$ligne][$colonne] = table_case($joueur);
    $_SESSION['morpion']['joueur_actuel'] = joueur_suivant($joueur);
    for($i = 1, $temoin = 0; $i <= 3; $i++) {
        for($u = 1; $u <= 3; $u++) {
            if($_SESSION['morpion']['tableau'][$i][$u] == table_case(null, $i.','.$u, joueur_suivant($_SESSION['morpion']['joueur_actuel']))) { 
                $_SESSION['morpion']['tableau'][$i][$u] = table_case(null, $i.','.$u, $_SESSION['morpion']['joueur_actuel']);
                $temoin++;
            }
        }
    }
    if($temoin == 0) {
        $_SESSION['morpion']['partie_finie'] = true;
    }
    header('Location: index.php');
}

$j1 = table_case(1);
$j2 = table_case(2);

if(
($_SESSION['morpion']['tableau'][1][1] == $j1 && $_SESSION['morpion']['tableau'][1][2] == $j1 && $_SESSION['morpion']['tableau'][1][3] == $j1) ||
($_SESSION['morpion']['tableau'][2][1] == $j1 && $_SESSION['morpion']['tableau'][2][2] == $j1 && $_SESSION['morpion']['tableau'][2][3] == $j1) ||
($_SESSION['morpion']['tableau'][3][1] == $j1 && $_SESSION['morpion']['tableau'][3][2] == $j1 && $_SESSION['morpion']['tableau'][3][3] == $j1) ||
($_SESSION['morpion']['tableau'][1][1] == $j1 && $_SESSION['morpion']['tableau'][2][1] == $j1 && $_SESSION['morpion']['tableau'][3][1] == $j1) ||
($_SESSION['morpion']['tableau'][1][2] == $j1 && $_SESSION['morpion']['tableau'][2][2] == $j1 && $_SESSION['morpion']['tableau'][3][2] == $j1) ||
($_SESSION['morpion']['tableau'][1][3] == $j1 && $_SESSION['morpion']['tableau'][2][3] == $j1 && $_SESSION['morpion']['tableau'][3][3] == $j1) ||
($_SESSION['morpion']['tableau'][1][1] == $j1 && $_SESSION['morpion']['tableau'][2][2] == $j1 && $_SESSION['morpion']['tableau'][3][3] == $j1) ||
($_SESSION['morpion']['tableau'][1][3] == $j1 && $_SESSION['morpion']['tableau'][2][2] == $j1 && $_SESSION['morpion']['tableau'][3][1] == $j1)) {
    $_SESSION['morpion']['gagnant'] = 'le gagnant est le joueur 1';
    $_SESSION['morpion']['partie_finie'] = true;
}
elseif(
($_SESSION['morpion']['tableau'][1][1] == $j2 && $_SESSION['morpion']['tableau'][1][2] == $j2 && $_SESSION['morpion']['tableau'][1][3] == $j2) ||
($_SESSION['morpion']['tableau'][2][1] == $j2 && $_SESSION['morpion']['tableau'][2][2] == $j2 && $_SESSION['morpion']['tableau'][2][3] == $j2) ||
($_SESSION['morpion']['tableau'][3][1] == $j2 && $_SESSION['morpion']['tableau'][3][2] == $j2 && $_SESSION['morpion']['tableau'][3][3] == $j2) ||
($_SESSION['morpion']['tableau'][1][1] == $j2 && $_SESSION['morpion']['tableau'][2][1] == $j2 && $_SESSION['morpion']['tableau'][3][1] == $j2) ||
($_SESSION['morpion']['tableau'][1][2] == $j2 && $_SESSION['morpion']['tableau'][2][2] == $j2 && $_SESSION['morpion']['tableau'][3][2] == $j2) ||
($_SESSION['morpion']['tableau'][1][3] == $j2 && $_SESSION['morpion']['tableau'][2][3] == $j2 && $_SESSION['morpion']['tableau'][3][3] == $j2) ||
($_SESSION['morpion']['tableau'][1][1] == $j2 && $_SESSION['morpion']['tableau'][2][2] == $j2 && $_SESSION['morpion']['tableau'][3][3] == $j2) ||
($_SESSION['morpion']['tableau'][1][3] == $j2 && $_SESSION['morpion']['tableau'][2][2] == $j2 && $_SESSION['morpion']['tableau'][3][1] == $j2)) {
    $_SESSION['morpion']['gagnant'] = 'le gagnant est le joueur 2';
    $_SESSION['morpion']['partie_finie'] = true;
}
elseif($_SESSION['morpion']['partie_finie'] == true) {
    $_SESSION['morpion']['gagnant'] = 'il n\'y a pas de vainqueur';
}
?>

<!--
## morpion en PHP ## début HTML ##
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <title>morpion</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style> /* CSS */
        body { background-color: darkgreen; color: #fafafa}
    .content {
        width: 40%;
        height: 50%;
        margin: 10% auto;
        text-align: center;
    }
    .col {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    h1 {font-size:120%;}
    p {font-size:90%;}
    h1, p {font-family:verdana;}
    a {color:#fff; text-decoration:none;}
    .morpion {border-collapse:collapse;}
    .morpion td {border:1px dashed #fff; }
    </style>
</head>

<body>
    <div class="col content">
        <h1>morpion</h1>
        <?php
        if($_SESSION['morpion']['partie_finie'] == true) {
            ?>
            <p>La partie est terminée, <br>et <?php echo $_SESSION['morpion']['gagnant']; ?>. <br><br>
            <a href="?nouvelle_partie"><button>Cliquez ici</button></a> pour commencer une nouvelle partie.</p>
            <?php
            
        }
        else {
            ?>
            <p>La partie a commencé.<br> C'est au joueur <?php echo $_SESSION['morpion']['joueur_actuel']; ?> de jouer.<br><br> 
            <a href="?nouvelle_partie"><button>Cliquez ici</button></a> pour commencer une nouvelle partie.</p>
            <?php
        }
        if($_SESSION['morpion']['partie_finie']) {
            ?>
            <table class="morpion">
            <tr>
                <?php
                table_case_partie_finie(1,1);
                table_case_partie_finie(1,2);
                table_case_partie_finie(1,3);
                ?>
            </tr>
            <tr>
                <?php
                table_case_partie_finie(2,1);
                table_case_partie_finie(2,2);
                table_case_partie_finie(2,3);
                ?>
            </tr>
            <tr>
                <?php
                table_case_partie_finie(3,1);
                table_case_partie_finie(3,2);
                table_case_partie_finie(3,3);
                ?>
            </tr>
            </table>
            <?php
        }
        else {
            ?>
            <table class="morpion">
            <tr>
                <td><?php echo $_SESSION['morpion']['tableau'][1][1]; ?></td>
                <td><?php echo $_SESSION['morpion']['tableau'][1][2]; ?></td>
                <td><?php echo $_SESSION['morpion']['tableau'][1][3]; ?></td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['morpion']['tableau'][2][1]; ?></td>
                <td><?php echo $_SESSION['morpion']['tableau'][2][2]; ?></td>
                <td><?php echo $_SESSION['morpion']['tableau'][2][3]; ?></td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['morpion']['tableau'][3][1]; ?></td>
                <td><?php echo $_SESSION['morpion']['tableau'][3][2]; ?></td>
                <td><?php echo $_SESSION['morpion']['tableau'][3][3]; ?></td>
            </tr>
            </table>
            <?php
        }
        ?>
    </div> <!-- content -->
</body>
</html>