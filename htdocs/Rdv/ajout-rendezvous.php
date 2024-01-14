<?php
require_once "../config/connexion.php";

if (!empty($_POST["idPatients"])
&& !empty($_POST["date"])) {


    
    $sql = "INSERT INTO `appointments`(`idPatients` , `dateHour`) VALUES ('"
                . $_POST["idPatients"]. "',  '"
                . $_POST["date"] ."')";
                
                
                $connexion->query($sql);
                


                header("Location: ./listerendezvous.php");
                
}else{
header("Location: ../index3.php");
}



