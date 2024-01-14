<?php

require_once "../config/connexion.php";


        
    $sql="DELETE FROM `appointments` WHERE `idPatients` = {$_GET['id']}";
    $connexion->query($sql);

    header("Location: profilclient.php");   

    
?>