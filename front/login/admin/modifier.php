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
    <link rel="stylesheet" href="../../style/mmodifier_style.css">
    <link rel="stylesheet" href="../../style/hheader_style.css">
    <link rel="stylesheet" href="../../style/modifier_style.css">
  
    <title>Document</title>
</head>
<body>
    <a href="admin.php" style="padding: 10px;">
    <svg width="35" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.95 34.4858L7.41421 23.95L17.95 13.4142L18.6858 14.15L11.0929 21.7429L9.38579 23.45H11.8H41V24.45H11.8H9.38579L11.0929 26.1571L18.6858 33.75L17.95 34.4858Z" fill="#EBF4ED" stroke="#EBF4ED" stroke-width="2"/>
</svg>


    </a>
    <div class="container mdf">
        <?php if (isset($md)) {
            echo $md;
        }  ?>
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
                <input id="modifier" style="display:none;" type="submit" style="background-color: #14A3C2;" name="submit" id="submit" class="form-control" value="inscription">
                <a onclick="visibl('Appliquer les changements ?', 'modifier')" style="background-color: #14A3C2;text-align:center;cursor:pointer;text-decoration:none;"  id="submit" class="form-control" value="">modifier</a>
                </div>
            </form>
    </div>
        <script>
            a = document.getElementById('r')
            function appui()
            {
                r.click()
            }
            if (a) 
                {
                    setTimeout(appui, 1000)
                }
            
                </script>
   <script src="../../inscription/script.js"></script>
    <script src="../header/script-header.js"></script>
</body>
</html>