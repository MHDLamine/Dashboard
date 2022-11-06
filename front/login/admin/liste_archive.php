<?php session_start();?>
<?php include "../../../back/config.php"; ?>
<?php include "../header/header.php"; ?>
<?php include "../../../back/data_archive.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/header_style.css">
    <link rel="stylesheet" href="../../style/aadmin_style.css">
    <title>Document</title>
</head>
<body>
    <style>
        #archive
        {
            border-bottom: 2px solid #14A3C2;;
        }
    </style>
    
    <div class="container">
    <form class="d-flex" role="search" style="padding-bottom:10px;padding-top:10px;">
        <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
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
            <th scope="col">date suppression</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
    <tbody  class="tbody">
         <?php
         if ($row_a) {
            foreach ($row_a as $row_a) {
                

        ?>

<tr>
        <td><?= $row_a['prenom']; ?></td>
        <td><?= $row_a['nom']; ?></td>
        <td><?= $row_a['email']; ?></td>
        <td><?= $row_a['matricule']; ?></td>
     <?php
        if ($row_a['role'] == 'administrateur') {
     ?>
        <td style="margin-right:5px ;"><?= $row_a['role']; ?> <svg width="17" height="23" viewBox="0 0 30 35" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M22.0943 26.6979C22.8155 26.6979 23.4258 26.4211 23.9251 25.8677C24.4244 25.3142 24.6741 24.6588 24.6741 23.9014C24.6741 23.144 24.4244 22.5031 23.9251 21.9788C23.4258 21.4544 22.8155 21.1923 22.0943 21.1923C21.3731 21.1923 20.749 21.4544 20.2219 21.9788C19.6949 22.5031 19.4313 23.144 19.4313 23.9014C19.4313 24.6588 19.6949 25.3142 20.2219 25.8677C20.749 26.4211 21.3731 26.6979 22.0943 26.6979ZM22.0527 32.1598C22.9681 32.1598 23.8003 31.9559 24.5492 31.5481C25.2982 31.1402 25.9362 30.5576 26.4632 29.8002C25.742 29.3924 25.0208 29.0866 24.2996 28.8826C23.5784 28.6787 22.8294 28.5768 22.0527 28.5768C21.276 28.5768 20.5201 28.6787 19.785 28.8826C19.0499 29.0866 18.3356 29.3924 17.6422 29.8002C18.1692 30.5576 18.8003 31.1402 19.5354 31.5481C20.2705 31.9559 21.1096 32.1598 22.0527 32.1598ZM13.3148 35C9.48682 34.0678 6.31068 31.7884 3.78641 28.1617C1.26214 24.535 0 20.3766 0 15.6866V5.24345L13.3148 0L26.6297 5.24345V17.0412C26.2413 16.8373 25.8252 16.6552 25.3814 16.495C24.9376 16.3348 24.5215 16.2256 24.1331 16.1673V7.07865L13.3148 2.8839L2.49653 7.07865V15.6866C2.49653 17.9005 2.83634 19.9397 3.51595 21.804C4.19556 23.6683 5.06241 25.3069 6.11651 26.7197C7.1706 28.1325 8.33564 29.305 9.61165 30.2372C10.8877 31.1694 12.1221 31.8394 13.3148 32.2472C13.4813 32.5968 13.7309 32.99 14.0638 33.427C14.3967 33.8639 14.6741 34.1989 14.896 34.432C14.6463 34.5776 14.3828 34.6868 14.1054 34.7597C13.828 34.8325 13.5645 34.9126 13.3148 35ZM22.1775 35C20.0139 35 18.1692 34.1916 16.6436 32.5749C15.1179 30.9582 14.3551 29.0429 14.3551 26.829C14.3551 24.5568 15.1179 22.6124 16.6436 20.9956C18.1692 19.3789 20.0139 18.5705 22.1775 18.5705C24.3135 18.5705 26.1512 19.3789 27.6907 20.9956C29.2302 22.6124 30 24.5568 30 26.829C30 29.0429 29.2302 30.9582 27.6907 32.5749C26.1512 34.1916 24.3135 35 22.1775 35Z" fill="#169A00"/>
        </svg>
        </td>
        <?php  
        }else
        {
          ?>
        <td><?= $row_a['role']; ?></td>
          <?php
          };
          ?>
        <td><?= $row_a['date_suppression']; ?></td>
        <td class="action">
        <a href="../../../back/serveur_restaurer.php?id=<?php echo $row_a['id']  ?>">
            <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M36.5 28V21.5H30V18.5H36.5V12H39.5V18.5H46V21.5H39.5V28H36.5ZM18 23.95C15.8 23.95 14 23.25 12.6 21.85C11.2 20.45 10.5 18.65 10.5 16.45C10.5 14.25 11.2 12.45 12.6 11.05C14 9.65001 15.8 8.95001 18 8.95001C20.2 8.95001 22 9.65001 23.4 11.05C24.8 12.45 25.5 14.25 25.5 16.45C25.5 18.65 24.8 20.45 23.4 21.85C22 23.25 20.2 23.95 18 23.95ZM2 40V35.3C2 34.1333 2.29167 33.075 2.875 32.125C3.45833 31.175 4.3 30.4667 5.4 30C7.9 28.9 10.125 28.125 12.075 27.675C14.025 27.225 16 27 18 27C20 27 21.9667 27.225 23.9 27.675C25.8333 28.125 28.05 28.9 30.55 30C31.65 30.5 32.5 31.2167 33.1 32.15C33.7 33.0833 34 34.1333 34 35.3V40H2ZM5 37H31V35.3C31 34.7667 30.85 34.2583 30.55 33.775C30.25 33.2917 29.85 32.9333 29.35 32.7C26.9833 31.6 24.9833 30.875 23.35 30.525C21.7167 30.175 19.9333 30 18 30C16.0667 30 14.275 30.175 12.625 30.525C10.975 30.875 8.96667 31.6 6.6 32.7C6.1 32.9333 5.70833 33.2917 5.425 33.775C5.14167 34.2583 5 34.7667 5 35.3V37ZM18 20.95C19.3 20.95 20.375 20.525 21.225 19.675C22.075 18.825 22.5 17.75 22.5 16.45C22.5 15.15 22.075 14.075 21.225 13.225C20.375 12.375 19.3 11.95 18 11.95C16.7 11.95 15.625 12.375 14.775 13.225C13.925 14.075 13.5 15.15 13.5 16.45C13.5 17.75 13.925 18.825 14.775 19.675C15.625 20.525 16.7 20.95 18 20.95Z" fill="#14A3C2"/>
        </svg>
        </a>

            </td>
        </tr>
        
        <?php
            };
         }
          else{ 
        ?> 
        <tr>
            <td colspan="7">
                <p>Liste Vide</p>
            </td>
        </tr>
        <?php

         }; 
         ?>
        </div>
        
     </tbody>
    </table>

    <nav aria-label="Page navigation example" style="position: fixed;top:90%;float:right;">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="liste_archive.php?page_a=1">1</a></li>
    <li class="page-item"><a class="page-link" href="liste_archive.php?page_a=2">2</a></li>
    <li class="page-item"><a class="page-link" href="liste_archive.php?page_a=3">3</a></li>
    <li class="page-item"><a class="page-link" href="liste_archive.php?page_a=4">4</a></li>
    <li class="page-item"><a class="page-link" href="liste_archive.php?page_a=5">5</a></li>
    <li class="page-item"><a class="page-link" href="liste_archive.php?page_a=6">6</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

    </div>

       

</body>
</html>