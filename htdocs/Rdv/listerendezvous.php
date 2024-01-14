<?php

require_once "../config/connexion.php";

$elementsParPage = 5; // Nombre d'éléments à afficher par page
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1; // Page actuelle, par défaut 1

// Calcul de l'offset pour la requête SQL
$offset = ($pageActuelle - 1) * $elementsParPage;




$sql = "SELECT* FROM `appointments` JOIN `patients` ON patients.id = appointments.idPatients
LIMIT $offset, $elementsParPage";
$dataObject = $connexion->query($sql);
$appointments = $dataObject->fetchAll(PDO::FETCH_ASSOC);

$totalElements = $connexion->query("SELECT COUNT(*) FROM `patients`")->fetchColumn();
$totalPages = ceil($totalElements / $elementsParPage);
?>

<pre>
<?php    

?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
   
</head>
<body>
    <div class="align"><br>
        <h2>Liste Rendez-vous</h2>
        <br>
        <i class="fa-solid fa-square-h fa-beat fa-4x" style="color: #ffffff;"></i>
        <br><br>

    
    
        <?php foreach ($appointments as $user) { ?>
            <a id="liste" href="./profilclient.php?id=<?=$user['idPatients']?>">
                <p>      <?=$user['firstname']?>  
                        <?=$user['lastname']?> 
                a rdv le <?=$user['dateHour']?></p> 
                
                
            </a>
            
        
        <?php } ?>
            <br>
        </div>


    <div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
    <a href="?page=<?= $i ?>"><?= $i ?></a>
    <?php } ?>
    </div>

    <br>
    <br>


    <div class="align">
    <a href="/index.php"><i class="fa-solid fa-house fa-bounce fa-2xl" style="color: #ffffff;"></i>
    <h2>Retour au menu</h2></a>
    <br>
    <br>


  






    <script src="https://kit.fontawesome.com/23471b5a81.js" crossorigin="anonymous"></script>   
</body>
</html>