<?php

require_once "./config/connexion.php";

$sql = "SELECT * FROM `patients` ";

$dataObject = $connexion->query($sql);


$data = $dataObject->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>


    
    <div class="align">
        <h1>Profil patient</h1>
        
        <ul>
    <?php foreach ($data as $user) { ?>
        <li><?= $user["id"]?> :
        <?= "<br>" ?>
        <?= $user["firstname"]?> 
        <?= "<br>" ?>
        <?= $user["lastname"]?>
        <?= "<br>" ?>
        <?= $user["birthdate"]?> </li>


    <?php } ?>



    
</body>
</html>

