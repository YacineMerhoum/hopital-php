<?php

require_once "../config/connexion.php";

$elementsParPage = 7; // Nombre d'éléments à afficher par page
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 1; // Page actuelle, par défaut 1

// Calcul de l'offset pour la requête SQL
$offset = ($pageActuelle - 1) * $elementsParPage;





$sql = "SELECT * FROM `patients` 
LIMIT $offset, $elementsParPage";

$dataObject = $connexion->query($sql);


$data = $dataObject->fetchAll(PDO::FETCH_ASSOC);

$totalElements = $connexion->query("SELECT COUNT(*) FROM `patients`")->fetchColumn();
$totalPages = ceil($totalElements / $elementsParPage);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <h2>Liste des patients :</h2>

    <div class="tableau">
        <h1> Informations sur les patients</h1>

        <li>
            <?php foreach ($data as $user) { ?>
                <a href="./profil-patient.php?id=<?= $user["id"] ?>">
        <li><?= $user["id"] ?> :
            <?= $user["firstname"] ?>
            <?= $user["lastname"] ?>

        </li></a>


    <?php } ?>

    </li>
    </div>


    <br><br><br>
    <div class="pagination">
        <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
            <a href="?page=<?= $i ?>"><?= $i ?></a>
        <?php } ?>





        <div class="tableau">
            <br>
            <a href="/index.php"><i class="fa-solid fa-house fa-bounce fa-2xl" style="color: #ffffff;"></i>
                <h1><a href="../index.php">Retour au menu</h1>
                <img src="https://www.logogenie.fr/download/preview/engine/13109798" height="450px">
            </a>
        </div>





        <script src="https://kit.fontawesome.com/23471b5a81.js" crossorigin="anonymous"></script>
</body>

</html>