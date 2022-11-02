<?php include "back/serveur_connexion.php";  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="front/style/index_style.css">
    <title>inscription</title>
</head>
<body>

    <div class="container larg">
        <h3>Page de connexion</h3>
        <?php
        if (isset($message)) {
              foreach ($message as $message) {
        
            echo '<div style="margin-bottom:10px; color:red; text-align:center;">'. $message.'</div>';
            
        }
    }
        ?>
        </br>
            <form action="" method="post" class="row g-2 " id="form">
                <div  class="col-md-12" class="form-floating">
                <div class="col-md-12">
                <label for="email" class="form-label">Email<span id="emaillab">*</span></label>
                <input type="text" class="form-control" name="email" id="email"  onkeyup="emailf();">
                <span class="message"></span>
                </div>
                </br>
                <div class="col-md-12">
                <label for="mdp" class="form-label">Mot de passe <span id="mdplab">*</span></label>
                <input type="password" class="form-control" name="mdp" id="mdp"   onkeyup="mdpf();">
                <span class="message"></span>
                </div> 
                </br>      
                <div class="col-md-12">
                <input type="submit" name="submit" id="submit" class="form-control" value="connexion"  disabled>
                </div>
                </div>
            </form>
        <a href="front/inscription/inscription.php">J'ai pas de compte ?</a>
    </div>
    
<script src="front/script_index.js"></script>
</body>
</html>