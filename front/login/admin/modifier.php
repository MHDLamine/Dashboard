<?php session_start();?>
<?php include "../../../back/config.php"; ?>
<?php include "../header/header.php"; ?>
<?php include "../../../back/data_active.php"; ?>
<?php include "../../../back/serveur_modifier.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style/modifier_style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h5 style="text-align:center;padding:10px 0px;">Modifier</h5>
    <?php
     $id = $_GET['id'];
     $sql = "SELECT * from users WHERE etat = 1  AND id = $id";
     $select = $conn->prepare($sql);
     $select->execute();
     $row = $select->fetch(PDO::FETCH_ASSOC);
    ?>
    <form action="" method="post" class="row g-2 " id="form" >
                <div  class="col-md-6" class="form-floating">
                <label for="prenom" class="form-label" >Prénom <span id="prenomlab">*</span> </label>
                <input type="text" value=<?php echo $row['prenom'];  ?>  onkeyup="prenomf();" class="form-control" name="prenom" id="prenom" >
                <span class="message"></span>
                </br>
                </div>
                <div class="col-md-6">
                <label for="nom" class="form-label">Nom<span id="nomlab">*</span> </label>
                <input type="text" class="form-control" value=<?php echo $row['nom'];  ?> id="nom" name="nom" onkeyup="nomf();">
                <span class="message"></span>
                </br>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label">Email<span id="emaillab">*</span></label>
                <input type="text" class="form-control" name="email" id="email" value=<?php echo $row['email'];  ?>  onkeyup="emailf();">
                <span class="message"></span>
                </br>
                </div>
                <div class="col-md-6">
                <input type="submit" name="submit" id="submit" class="form-control" value="inscription">
                </div>
            </form>
    </div>
    <script src="../../inscription/script.js"></script>
</body>
</html>