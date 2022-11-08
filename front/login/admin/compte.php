<?php session_start();?>
<?php include "../../../back/config.php"; ?>
<?php include "../header/header.php"; ?>
<?php
    if (isset($_POST['tof_edit'])) {
       echo "rr";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/header_style.css">
    <link rel="stylesheet" href="../../style/ccompte_style.css">
    <title></title>
</head>
<body>
<style>
        #compte
            {
                border-bottom: 2px solid #14A3C2;;
            }
        </style>
        <div id="ecompte" class="container">
        <div class="row">
                <div class="col-4">
                        <p>Connecté en tant que  : <span class="result"> <?= $info['email']; ?></span></p>
                        <p>role : <span class="result"> <?= $info['role']; ?></span></p>
                        <p>Prénom : <span class="result"> <?= $info['prenom']; ?></span></p>
                        <p>nom : <span class="result"> <?= $info['nom']; ?></span></p>
                        <p>matricule : <span class="result"> <?= $info['matricule']; ?></span></p>
                        <p>date d'inscription <span class="result"> : <?= $info['date_inscription']; ?></span></p>
                </div>
                <div class="col-4">
                           <div class="img_edit" onclick="choisir()">
                    <p class="bb"><svg id="tof" width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23 17C23 17.5304 22.7893 18.0391 22.4142 18.4142C22.0391 18.7893 21.5304 19 21 19H3C
                    2.46957 19 1.96086 18.7893 1.58579 18.4142C1.21071 18.0391 1 17.5304 1 17V6C1 5.46957 1.21071 4.96086 1.58579 4.58579C1.96086 4.21071 2.46957 4 3 4H7L9 1H15L17 4H21C21.5304 4 22.0391 4.21071 22.4142 4.58579C22.7893 4.96086 23 5.46957 23 6V17Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></br> CHANGER LA </br> PHOTO DE </br> PROFIL</p> <img src="../../inscription/photo_utilisateur/<?= $info['image']?> " alt=""> 
                </div>
                <p id="ajr" class="v" onclick="changeimg()">mettre à jour l'image</p>
                </div>
                <div class="col-4">
                    <form action="" method="post" class="row g-2 " id="form"  enctype="multipart/form-data">
                    <div class="col-md-8">
                        <label for="mdp" class="form-label"> mot de passe actuelle<span id="mdplab">*</span></label>
                        <input type="password" class="form-control" name="mdp" id="mdp"   onkeyup="mdpf();">
                        <span class="message"></span>
                        </br>
                    </div>
                        <div class="col-md-8">
                        <label for="confirm_mdp" class="form-label">nouveau mot de passe <span id="mdpclab">*</span></label>
                        <input type="password" class="form-control" id="confirm_mdp"   onkeyup="confirm_mdpf();">
                        <span class="message"></span>
                        </br>
                    </div>
                    <div class="col-md-6">
                        <input  type="submit" name="mdp_edit" id="mdp_edit" class="form-control" value="modifier"  disabled>
                    </div>



                        <form action="update_img.php" method="get">
                        <input type="file" class="form-control" id="file" name="file" style="display:none;">
                        <input id="send_img"  type="submit" name="tof_edit" id="tof_edit" class="form-control" value="Appliquer"  style="display:none;">
                        </form>
                    <div class="col-md-6">
                       
                    </div>
                    </div>
        </div>  
        </div>
</body>
            <script>
//voir le boutton pour appliquer le changement du mpd
let ajr = document.getElementById('ajr');
function voir()
{
    ajr.classList.add('voir');
}
                //ceci apparait et disparait kelk s apres apres avoir clicker sur l'image
                let file = document.getElementById('file');
                function choisir()
                {
                    file.click()
                    voir()
                    interval()
                }
//cacher le bouton
function cacher()
{
    ajr.classList.remove('voir');
}
   //ceci apparait et disparait kelk seconde aprés
function interval()
{
    setTimeout(cacher, 10000);
}

let send_img = document.getElementById('send_img');
function changeimg()
{
    send_img.click();
}
            </script>
</html>