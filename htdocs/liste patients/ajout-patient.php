<?php

require_once "../config/connexion.php";

if (!empty($_POST["firstname"])
&& !empty($_POST["lastname"])
&& !empty($_POST["birthdate"])) {


    $sql = "INSERT INTO `patients`(`lastname`, `firstname` , `birthdate` , `mail` , `phone`) VALUES ('"

                . $_POST["lastname"]. "', '" 
                . $_POST["firstname"]. "',  '"
                . $_POST["birthdate"]. "',  '"
                . $_POST["mail"]. "',  '"
                . $_POST["phone"] ."')";

       
    $connexion->query($sql);
    
    header("Location: ./liste-patients.php");

}
    
else{
    header("Location: ../index2.php");
}
    
    
    










    
