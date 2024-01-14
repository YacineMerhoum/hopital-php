<?php require_once "../config/connexion.php";

if (!empty($_GET['id'])) {
    $sql = "SELECT DISTINCT * FROM `patients` WHERE `id` = ". $_GET['id'];
}else{
    $sql = "SELECT DISTINCT * FROM `patients` ";
}

$dataObject = $connexion->query($sql);
$data = $dataObject->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylepatient.css">
    
    <title>Profil Patient</title>
</head>
<body>
    <br>
    <div class="titre">
    <h1>Informations personelles patients </h1>
    
    <br>
    <img id="logo" height="150px" 
    src="https://as1.ftcdn.net/v2/jpg/02/19/11/58/1000_F_219115897_DcAzoVgpBPlONynXwukwyPPSojWIecKi.jpg">
    <br>
    <h5>La fondation "Saint Rabeh" rappelle à ses employés que les informations clients sont
        strictement confidentielles.<br>
        Merci de respecter le réglement.<br>
        Le non respect des règles peuvent entraîner de lourdes sanctions pénales et professionnelles.<br>
        <br>
        Le directeur : Jorges Robles
    </h5>
    <br>
</div>
<li>
        <?php foreach ($data as $user) {
            
            ?>
            <ul class="tableau" >
                <br>
             Nom de famille patient : <?= $user["lastname"]?>
             <br> 
             Prénom du patient : <?= $user["firstname"]?> 
             <br>
             Date de naissance : <?= $user["birthdate"]?> 
             <br>
             Mail : <?= $user["mail"]?> 
             <br>
             Numéro tel : <?= $user["phone"]?> 
             <br><br>
        
          
             

             
             
             
             </ul>


        <?php } ?>
    
</body>
</html>