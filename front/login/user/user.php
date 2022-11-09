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
        #archive, #user
            {
               display: none;
            }
        </style>
<div class="container">
        <form  class="d-flex" role="search" style="padding-bottom:10px;padding-top:10px;">
            <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
            <div class="btn-search">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.0004 21L16.6504 16.65" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </div>
            
        </form>
    
    <table class="table" >
        <thead class="col">
            <tr>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Matricule</th>
            <th scope="col">Rôle</th>
            <th scope="col">date d'inscription</th>
            </tr>
        </thead>
    <tbody  class="tbody">
    <?php
     if (isset($_POST['search'])) {
           
                

        ?>

<tr>
        <td><?= $row['prenom']; ?></td>
        <td><?= $row['nom']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['matricule']; ?></td>
     <?php
        if ($row['role'] == 'administrateur') {
     ?>
        <td style="margin-right:5px ;"><?= $row['role']; ?> <svg width="17" height="23" viewBox="0 0 30 35" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M22.0943 26.6979C22.8155 26.6979 23.4258 26.4211 23.9251 25.8677C24.4244 25.3142 24.6741 24.6588 24.6741 23.9014C24.6741 23.144 24.4244 22.5031 23.9251 21.9788C23.4258 21.4544 22.8155 21.1923 22.0943 21.1923C21.3731 21.1923 20.749 21.4544 20.2219 21.9788C19.6949 22.5031 19.4313 23.144 19.4313 23.9014C19.4313 24.6588 19.6949 25.3142 20.2219 25.8677C20.749 26.4211 21.3731 26.6979 22.0943 26.6979ZM22.0527 32.1598C22.9681 32.1598 23.8003 31.9559 24.5492 31.5481C25.2982 31.1402 25.9362 30.5576 26.4632 29.8002C25.742 29.3924 25.0208 29.0866 24.2996 28.8826C23.5784 28.6787 22.8294 28.5768 22.0527 28.5768C21.276 28.5768 20.5201 28.6787 19.785 28.8826C19.0499 29.0866 18.3356 29.3924 17.6422 29.8002C18.1692 30.5576 18.8003 31.1402 19.5354 31.5481C20.2705 31.9559 21.1096 32.1598 22.0527 32.1598ZM13.3148 35C9.48682 34.0678 6.31068 31.7884 3.78641 28.1617C1.26214 24.535 0 20.3766 0 15.6866V5.24345L13.3148 0L26.6297 5.24345V17.0412C26.2413 16.8373 25.8252 16.6552 25.3814 16.495C24.9376 16.3348 24.5215 16.2256 24.1331 16.1673V7.07865L13.3148 2.8839L2.49653 7.07865V15.6866C2.49653 17.9005 2.83634 19.9397 3.51595 21.804C4.19556 23.6683 5.06241 25.3069 6.11651 26.7197C7.1706 28.1325 8.33564 29.305 9.61165 30.2372C10.8877 31.1694 12.1221 31.8394 13.3148 32.2472C13.4813 32.5968 13.7309 32.99 14.0638 33.427C14.3967 33.8639 14.6741 34.1989 14.896 34.432C14.6463 34.5776 14.3828 34.6868 14.1054 34.7597C13.828 34.8325 13.5645 34.9126 13.3148 35ZM22.1775 35C20.0139 35 18.1692 34.1916 16.6436 32.5749C15.1179 30.9582 14.3551 29.0429 14.3551 26.829C14.3551 24.5568 15.1179 22.6124 16.6436 20.9956C18.1692 19.3789 20.0139 18.5705 22.1775 18.5705C24.3135 18.5705 26.1512 19.3789 27.6907 20.9956C29.2302 22.6124 30 24.5568 30 26.829C30 29.0429 29.2302 30.9582 27.6907 32.5749C26.1512 34.1916 24.3135 35 22.1775 35Z" fill="#169A00"/>
        </svg>
        </td>
        <?php  
        }else
        {
          ?>
        <td><?= $row['role']; ?></td>
          <?php
          };
          ?>
          <td><?= $row['date_inscription']; ?></td>
        </tr>
        
        <?php
            }
else if ($row) {
            foreach ($row as $row) {
                

        ?>

<tr>
        <td><?= $row['prenom']; ?></td>
        <td><?= $row['nom']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['matricule']; ?></td>
     <?php
        if ($row['role'] == 'administrateur') {
     ?>
        <td><?= $row['role']; ?> <svg width="17" height="23" viewBox="0 0 30 35" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M22.0943 26.6979C22.8155 26.6979 23.4258 26.4211 23.9251 25.8677C24.4244 25.3142 24.6741 24.6588 24.6741 23.9014C24.6741 23.144 24.4244 22.5031 23.9251 21.9788C23.4258 21.4544 22.8155 21.1923 22.0943 21.1923C21.3731 21.1923 20.749 21.4544 20.2219 21.9788C19.6949 22.5031 19.4313 23.144 19.4313 23.9014C19.4313 24.6588 19.6949 25.3142 20.2219 25.8677C20.749 26.4211 21.3731 26.6979 22.0943 26.6979ZM22.0527 32.1598C22.9681 32.1598 23.8003 31.9559 24.5492 31.5481C25.2982 31.1402 25.9362 30.5576 26.4632 29.8002C25.742 29.3924 25.0208 29.0866 24.2996 28.8826C23.5784 28.6787 22.8294 28.5768 22.0527 28.5768C21.276 28.5768 20.5201 28.6787 19.785 28.8826C19.0499 29.0866 18.3356 29.3924 17.6422 29.8002C18.1692 30.5576 18.8003 31.1402 19.5354 31.5481C20.2705 31.9559 21.1096 32.1598 22.0527 32.1598ZM13.3148 35C9.48682 34.0678 6.31068 31.7884 3.78641 28.1617C1.26214 24.535 0 20.3766 0 15.6866V5.24345L13.3148 0L26.6297 5.24345V17.0412C26.2413 16.8373 25.8252 16.6552 25.3814 16.495C24.9376 16.3348 24.5215 16.2256 24.1331 16.1673V7.07865L13.3148 2.8839L2.49653 7.07865V15.6866C2.49653 17.9005 2.83634 19.9397 3.51595 21.804C4.19556 23.6683 5.06241 25.3069 6.11651 26.7197C7.1706 28.1325 8.33564 29.305 9.61165 30.2372C10.8877 31.1694 12.1221 31.8394 13.3148 32.2472C13.4813 32.5968 13.7309 32.99 14.0638 33.427C14.3967 33.8639 14.6741 34.1989 14.896 34.432C14.6463 34.5776 14.3828 34.6868 14.1054 34.7597C13.828 34.8325 13.5645 34.9126 13.3148 35ZM22.1775 35C20.0139 35 18.1692 34.1916 16.6436 32.5749C15.1179 30.9582 14.3551 29.0429 14.3551 26.829C14.3551 24.5568 15.1179 22.6124 16.6436 20.9956C18.1692 19.3789 20.0139 18.5705 22.1775 18.5705C24.3135 18.5705 26.1512 19.3789 27.6907 20.9956C29.2302 22.6124 30 24.5568 30 26.829C30 29.0429 29.2302 30.9582 27.6907 32.5749C26.1512 34.1916 24.3135 35 22.1775 35Z" fill="#169A00"/>
        </svg>
        </td>
        <?php  
        }else
        {
          ?>
        <td><?= $row['role']; ?></td>

     
          <?php
          };
          ?>
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
    ?>
     </ul>

    </div>

<script src="../../script_admin.js"></script>
</body>
</html>