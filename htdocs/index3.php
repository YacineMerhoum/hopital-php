<?php

require_once "./config/connexion.php";

$sql = "SELECT * FROM `patients` ";

$dataObject = $connexion->query($sql);



$data = $dataObject->fetchAll(PDO::FETCH_ASSOC);
// var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="align">
        
        <br><br><br>
        <img height="150px" src="https://cdn-icons-png.flaticon.com/512/1572/1572663.png">
    
        <h2>Prendre un rendez-vous</h2>
        <form action="./Rdv/ajout-rendezvous.php" method="post">
    
            <select name="idPatients" id="">
                <?php 
                foreach ($data as $key => $value) { ?>

                    <option value="<?=$value['id'] ?>"> 
                    <?= $value['firstname']?>
                     <?= $value['lastname']?>
                    </option>


                <?php } ?>
            </select>
            <input type="datetime-local" placeholder="date" name="date" value="2023-12-22" />
            <br><br>
            
            <button class="favorite styled" type="submit" >Enregister</button>
        </form>
    </div>
    
        
       
      </ul>
    </form>
    
</body>
</html>