<?php session_start();?>
<?php include "../../../back/config.php"; ?>
<?php include "../header/header.php"; ?>
<?php include "../../../back/data_active.php"; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style/aadmin_style.css">
    <link rel="stylesheet" href="../../style/header_style.css">
  
    
</head>
<body>
        <style>
        #archive, #user,#compte
            {
               display: none;
            }
        </style>
<div class="container">

        <form action="" method="post"  class="d-flex" role="search" style="padding-bottom:10px;padding-top:10px;">
            <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
            <button  style="padding:0px;border:none;opacity:1px;" type="submit" name="submit">
              <div class="btn-search">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M21.0004 21L16.6504 16.65" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              </div>
            </button>
        </form>
        <?php
            if (isset($retour_user)) {
                echo $retour_user;
            }
        ?>
    <table class="table" >
        <thead class="col">
            <tr>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Matricule</th>
            <th scope="col">date d'inscription</th>
            </tr>
        </thead>
    <tbody  class="tbody">
            <?php
                if (isset( $notexiste)) {
                    echo $notexiste;
                }
                ?>
    <?php
     if (isset($_POST['submit'])) {
      foreach ($row as $row) {
                

        ?>

<tr>
        <td><?= $row['prenom']; ?></td>
        <td><?= $row['nom']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['matricule']; ?></td>
        <td><?= $row['date_inscription']; ?></td>
        </tr>
        
        <?php
            }
          }
else if ($row) {
            foreach ($row as $row) {
                

        ?>

<tr>
        <td><?= $row['prenom']; ?></td>
        <td><?= $row['nom']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['matricule']; ?></td>
  
        <td><?= $row['date_inscription']; ?></td>
        </tr>
        <?php
            };
         }
          else{ 
        ?> 
        <tr>
            <td colspan="5">
                <p>Liste Vide</p>
            </td>
        </tr>
        <?php

         }; 
         ?>
        </div>
        
     </tbody>
    </table>
    <ul style="position: absolute; top:470px;" class="pagination">
    <?php
   if (!(isset($_POST['search']))) {
  if ( $select1->rowCount() >  0 ){
     echo " <li class=\"page-item\"><a class=\"page-link\" href=\"user.php?page=1\">1</a></li>";
  }
     $a = 6;
     if ( $select1->rowCount() >  $a + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"user.php?page=2\">2</a></li>";
     }
   
     if ( $select1->rowCount() > ($a * 2) + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"user.php?page=3\">3</a></li>";
     }
    
     if ($select1->rowCount() > ($a * 3) + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"user.php?page=4\">4</a></li>";
     }
  
     if( $select1->rowCount() > ($a * 4) + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"admin.php?page=5\">5</a></li>";
     }
  
     if (  $select1->rowCount() > ($a * 5) + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"user.php?page=6\">6</a></li>";
     }
    }
    ?>
     </ul>
    
    </div>

<script src="../../script_admin.js"></script>
</body>
</html>