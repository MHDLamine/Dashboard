<?php  include "../../../back/config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../style/header_style.css">

    <title></title>
</head>
<body>

<nav class="navbar back">
  <div class="container-fluid">
   <div class="left">
    <?php 
       
         $id = $_SESSION['id'];
         $user_ = "SELECT * from users WHERE id = $id";
         $user_info = $conn->prepare($user_);
         $user_info->execute();
         $info = $user_info->fetchAll(PDO::FETCH_ASSOC);
         if ($info) {
            foreach ($info as $info) {
                
    
    ?>
    <?php
    if ($info['image'] != NULL) 
        {
        
    ?>
    <div class="img"> <img src="../../inscription/photo_utilisateur/<?= $info['image']?> " alt=""> </div>
    <?php
        };
        if ($info['image'] == NULL) 
    {
    ?>
     bonjour
    <?php 
         };
    ?>
    <div class="name">
        <p id="mat">matricule: <?= $info['matricule']?></p>
        <p id="name"><?= $info['prenom']."  ".$info['nom'] ?></p>
    </div>
   </div>
   <?php  
           };
        }; 
    ?>
    <div class="right">
        <a href="admin.php" id="user">Utilisateur</a>
        <a href="liste_archive.php"  id="archive">Archive</a>
        <a href="#" id="compte">compte</a>
        <a href="../../../back/serveur_deconnexion.php?logout=1">
        <svg width="30" height="41" viewBox="0 0 46 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:darken">
            <path d="M17.25 44.625H9.58333C8.56667 44.625 7.59165 44.1772 6.87276 43.3802C6.15387 42.5832 5.75 41.5022 5.75 40.375V10.625C5.75 9.49783 6.15387 8.41683 6.87276 7.6198C7.59165 6.82277 8.56667 6.375 9.58333 6.375H17.25" stroke="#14A3C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M30.668 36.125L40.2513 25.5L30.668 14.875" stroke="#14A3C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M40.25 25.5H17.25" stroke="#14A3C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
        </svg>
        </a>
    </div>
  
</nav>
  </div>

<script src="script-header.js"></script>
</body>
</html>