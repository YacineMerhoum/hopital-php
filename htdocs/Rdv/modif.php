<?php

require_once "../config/connexion.php";
if (!empty($_GET["date2"])){
    
        $sql = "UPDATE `appointments`
        SET `dateHour` = '{$_GET['date2']}'
        WHERE `idPatients` = {$_GET['id']}";

$connexion->query($sql);
header("Location: listerendezvous.php");  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Modif</title>
</head>
<body>
    <form class="align" action="modif.php" method="get">
        <br>
        <h1>Veuillez modifier la date du RDV</h1>
        <br>
        <input type="datetime-local" name="date2">
        <br><br>
        <button class="favorite styled" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce rendez-vous ?')"
         type="submit">Modifier</button>
        <input type="hidden" value=" <?php echo $_GET["id"] ?> " name="id">
        <br>
        <img src="https://www.logogenie.fr/download/preview/engine/13109798" height="650px">


    </form>
    
</body>
</html>