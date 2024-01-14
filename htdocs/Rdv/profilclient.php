<?php require_once "../config/connexion.php";

if (!empty($_GET['id'])) {
    $sql = "SELECT DISTINCT * FROM `appointments` 
            JOIN `patients` 
                ON patients.id = appointments.idPatients
            WHERE idPatients = ". $_GET['id'];
}else{
    $sql = "SELECT DISTINCT * FROM `appointments` ";
}

$dataObject = $connexion->query($sql);
$data = $dataObject->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Client</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <br><br>
<div class="align">
    
    
    <h1> Profil client </h1>
    <i class="fa-solid fa-spinner fa-spin-pulse fa-2xl" style="color: #ffffff;"></i>
    <br><br>
    <li>
        <?php foreach ($data as $user) { ?>
            <ul id="liste" >
             ID Patient : <?= $user["idPatients"]?><br>
             Prénom : <?= $user["firstname"]?><br>
             Nom : <?= $user["lastname"]?><br>
             Date du RDV : <?= $user["dateHour"]?>
             <br><br>
             <form action="supression.php" method="get">
                
                <input type="hidden" value="<?php echo $user["idPatients"] ?>" name="id">
             <button class="styled2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rendez-vous ?')"
              type="submit"><i class="fa-solid fa-user-large-slash fa-sm"></i> Supprimer</button>
             </form>
             <br>
             
             

             <form action="modif.php" method="get">
                <input type="hidden" value="<?php echo $user["idPatients"] ?>" name="id">
             <button class="favorite styled" type="submit"><i class="fa-solid fa-user-pen fa-sm"></i>  Modifier</button>
             </form>
             </ul>


        <?php } ?>

        </li>
        <div class="tableau">
                <h1><a href="../index.php">Retour au menu</h1>
        <img src="https://www.logogenie.fr/download/preview/engine/13109798" height="450px">
        </a>
        </div>



    





</div>   
<script src="https://kit.fontawesome.com/23471b5a81.js" crossorigin="anonymous"></script>
</body>
</html>




