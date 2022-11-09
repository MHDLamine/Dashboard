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
    <link rel="stylesheet" href="../../style/admin_style.css">
    <link rel="stylesheet" href="../../style/header_style.css">
  
    
</head>
<body>
        <style>
        #user
            {
                border-bottom: 2px solid #14A3C2;;
            }
        </style>
<div class="container">
   
        <form  class="d-flex" role="search" style="padding-bottom:10px;padding-top:10px;">
            <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
            <div class="btn-search" >
            <input class="form-control" type="hidden" name="submit" type="submit">
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
            <th scope="col">Action</th>
            </tr>
        </thead>
    <tbody  class="tbody">
    <?php
     if (isset($_POST['search'])) {
     
                
echo "br"
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
        
        <td class="action">
           <!-- Pour la recherche seulement ici-->
            <a title="modifier" href="modifier.php?id=<?php echo $row['id']; ?>">
                <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.4 40L14.4 33.7C13.7667 33.4667 13.1 33.15 12.4 32.75C11.7 32.35 11.0833 31.9333 10.55 31.5L4.65 34.2L0 26L5.4 22.05C5.33333 21.75 5.29167 21.4083 5.275 21.025C5.25833 20.6417 5.25 20.3 5.25 20C5.25 19.7 5.25833 19.3583 5.275 18.975C5.29167 18.5917 5.33333 18.25 5.4 17.95L0 14L4.65 5.8L10.55 8.5C11.0833 8.06667 11.7 7.65 12.4 7.25C13.1 6.85 13.7667 6.55 14.4 6.35L15.4 0H24.6L25.6 6.3C26.2333 6.53333 26.9083 6.84167 27.625 7.225C28.3417 7.60833 28.95 8.03333 29.45 8.5L35.35 5.8L40 14L34.6 17.85C34.6667 18.1833 34.7083 18.5417 34.725 18.925C34.7417 19.3083 34.75 19.6667 34.75 20C34.75 20.3333 34.7417 20.6833 34.725 21.05C34.7083 21.4167 34.6667 21.7667 34.6 22.1L40 26L35.35 34.2L29.45 31.5C28.9167 31.9333 28.3083 32.3583 27.625 32.775C26.9417 33.1917 26.2667 33.5 25.6 33.7L24.6 40H15.4ZM20 26.5C21.8 26.5 23.3333 25.8667 24.6 24.6C25.8667 23.3333 26.5 21.8 26.5 20C26.5 18.2 25.8667 16.6667 24.6 15.4C23.3333 14.1333 21.8 13.5 20 13.5C18.2 13.5 16.6667 14.1333 15.4 15.4C14.1333 16.6667 13.5 18.2 13.5 20C13.5 21.8 14.1333 23.3333 15.4 24.6C16.6667 25.8667 18.2 26.5 20 26.5ZM20 23.5C19.0333 23.5 18.2083 23.1583 17.525 22.475C16.8417 21.7917 16.5 20.9667 16.5 20C16.5 19.0333 16.8417 18.2083 17.525 17.525C18.2083 16.8417 19.0333 16.5 20 16.5C20.9667 16.5 21.7917 16.8417 22.475 17.525C23.1583 18.2083 23.5 19.0333 23.5 20C23.5 20.9667 23.1583 21.7917 22.475 22.475C21.7917 23.1583 20.9667 23.5 20 23.5ZM17.8 37H22.2L22.9 31.4C24 31.1333 25.0417 30.7167 26.025 30.15C27.0083 29.5833 27.9 28.9 28.7 28.1L34 30.4L36 26.8L31.3 23.35C31.4333 22.7833 31.5417 22.225 31.625 21.675C31.7083 21.125 31.75 20.5667 31.75 20C31.75 19.4333 31.7167 18.875 31.65 18.325C31.5833 17.775 31.4667 17.2167 31.3 16.65L36 13.2L34 9.6L28.7 11.9C27.9333 11.0333 27.0667 10.3083 26.1 9.725C25.1333 9.14167 24.0667 8.76667 22.9 8.6L22.2 3H17.8L17.1 8.6C15.9667 8.83333 14.9083 9.23333 13.925 9.8C12.9417 10.3667 12.0667 11.0667 11.3 11.9L6 9.6L4 13.2L8.7 16.65C8.56667 17.2167 8.45833 17.775 8.375 18.325C8.29167 18.875 8.25 19.4333 8.25 20C8.25 20.5667 8.29167 21.125 8.375 21.675C8.45833 22.225 8.56667 22.7833 8.7 23.35L4 26.8L6 30.4L11.3 28.1C12.1 28.9 12.9917 29.5833 13.975 30.15C14.9583 30.7167 16 31.1333 17.1 31.4L17.8 37Z" fill="#14A3C2"/>
                </svg>
            </a>
            <a   id='supprimer'  href="../../../back/serveur_delete.php?id=<?php echo $row['id']; ?>"></a>
            <a title="supprimer" onclick="visibl('Voulez-vous vraiment supprimer ?', 'confirmer')">
                <svg width="30" height="30" viewBox="0 0 42 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.4 11.95V8.95H42V11.95H30.4ZM16 15C13.8 15 12 14.3 10.6 12.9C9.2 11.5 8.5 9.7 8.5 7.5C8.5 5.3 9.2 3.5 10.6 2.1C12 0.7 13.8 0 16 0C18.2 0 20 0.7 21.4 2.1C22.8 3.5 23.5 5.3 23.5 7.5C23.5 9.7 22.8 11.5 21.4 12.9C20 14.3 18.2 15 16 15ZM0 31.05V26.35C0 25.1833 0.291667 24.125 0.875 23.175C1.45833 22.225 2.3 21.5167 3.4 21.05C5.9 19.95 8.125 19.175 10.075 18.725C12.025 18.275 14 18.05 16 18.05C18 18.05 19.9667 18.275 21.9 18.725C23.8333 19.175 26.05 19.95 28.55 21.05C29.65 21.55 30.5 22.2667 31.1 23.2C31.7 24.1333 32 25.1833 32 26.35V31.05H0ZM3 28.05H29V26.35C29 25.8167 28.85 25.3083 28.55 24.825C28.25 24.3417 27.85 23.9833 27.35 23.75C24.9833 22.65 22.9833 21.925 21.35 21.575C19.7167 21.225 17.9333 21.05 16 21.05C14.0667 21.05 12.275 21.225 10.625 21.575C8.975 21.925 6.96667 22.65 4.6 23.75C4.1 23.9833 3.70833 24.3417 3.425 24.825C3.14167 25.3083 3 25.8167 3 26.35V28.05ZM16 12C17.3 12 18.375 11.575 19.225 10.725C20.075 9.875 20.5 8.8 20.5 7.5C20.5 6.2 20.075 5.125 19.225 4.275C18.375 3.425 17.3 3 16 3C14.7 3 13.625 3.425 12.775 4.275C11.925 5.125 11.5 6.2 11.5 7.5C11.5 8.8 11.925 9.875 12.775 10.725C13.625 11.575 14.7 12 16 12Z" fill="#14A3C2"/>
                </svg>
            </a>
            <a  title="changer role" href="../../../back/changerRole.php?id=<?php echo $row['id']; ?>">
                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27 28C28.6333 28 30.025 27.425 31.175 26.275C32.325 25.125 32.9 23.7333 32.9 22.1C32.9 20.4667 32.325 19.075 31.175 17.925C30.025 16.775 28.6333 16.2 27 16.2C25.3667 16.2 23.975 16.775 22.825 17.925C21.675 19.075 21.1 20.4667 21.1 22.1C21.1 23.7333 21.675 25.125 22.825 26.275C23.975 27.425 25.3667 28 27 28ZM13 39.05C14.7 36.8833 16.7667 35.1667 19.2 33.9C21.6333 32.6333 24.2333 32 27 32C29.7667 32 32.3667 32.6333 34.8 33.9C37.2333 35.1667 39.3 36.8833 41 39.05V11H13V39.05ZM13 42C12.1667 42 11.4583 41.7083 10.875 41.125C10.2917 40.5417 10 39.8333 10 39V11C10 10.1667 10.2917 9.45833 10.875 8.875C11.4583 8.29167 12.1667 8 13 8H41C41.8333 8 42.5417 8.29167 43.125 8.875C43.7083 9.45833 44 10.1667 44 11V39C44 39.8333 43.7083 40.5417 43.125 41.125C42.5417 41.7083 41.8333 42 41 42H13ZM7 48C6.16667 48 5.45833 47.7083 4.875 47.125C4.29167 46.5417 4 45.8333 4 45V16.5H7V45H35.5V48H7ZM27 25C26.2 25 25.5167 24.7167 24.95 24.15C24.3833 23.5833 24.1 22.9 24.1 22.1C24.1 21.3 24.3833 20.6167 24.95 20.05C25.5167 19.4833 26.2 19.2 27 19.2C27.8 19.2 28.4833 19.4833 29.05 20.05C29.6167 20.6167 29.9 21.3 29.9 22.1C29.9 22.9 29.6167 23.5833 29.05 24.15C28.4833 24.7167 27.8 25 27 25ZM17.65 39H36.35C35.15 37.7 33.7417 36.7083 32.125 36.025C30.5083 35.3417 28.8 35 27 35C25.2 35 23.4917 35.3417 21.875 36.025C20.2583 36.7083 18.85 37.7 17.65 39Z" fill="#14A3C2"/>
                </svg>
            </a>
            </td>
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
        
        <td class="action">
            <div class="action_div">

           

            <a  title="modifier" href="modifier.php?id=<?php echo $row['id']; ?>">
            <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.4 40L14.4 33.7C13.7667 33.4667 13.1 33.15 12.4 32.75C11.7 32.35 11.0833 31.9333 10.55 31.5L4.65 34.2L0 26L5.4 22.05C5.33333 21.75 5.29167 21.4083 5.275 21.025C5.25833 20.6417 5.25 20.3 5.25 20C5.25 19.7 5.25833 19.3583 5.275 18.975C5.29167 18.5917 5.33333 18.25 5.4 17.95L0 14L4.65 5.8L10.55 8.5C11.0833 8.06667 11.7 7.65 12.4 7.25C13.1 6.85 13.7667 6.55 14.4 6.35L15.4 0H24.6L25.6 6.3C26.2333 6.53333 26.9083 6.84167 27.625 7.225C28.3417 7.60833 28.95 8.03333 29.45 8.5L35.35 5.8L40 14L34.6 17.85C34.6667 18.1833 34.7083 18.5417 34.725 18.925C34.7417 19.3083 34.75 19.6667 34.75 20C34.75 20.3333 34.7417 20.6833 34.725 21.05C34.7083 21.4167 34.6667 21.7667 34.6 22.1L40 26L35.35 34.2L29.45 31.5C28.9167 31.9333 28.3083 32.3583 27.625 32.775C26.9417 33.1917 26.2667 33.5 25.6 33.7L24.6 40H15.4ZM20 26.5C21.8 26.5 23.3333 25.8667 24.6 24.6C25.8667 23.3333 26.5 21.8 26.5 20C26.5 18.2 25.8667 16.6667 24.6 15.4C23.3333 14.1333 21.8 13.5 20 13.5C18.2 13.5 16.6667 14.1333 15.4 15.4C14.1333 16.6667 13.5 18.2 13.5 20C13.5 21.8 14.1333 23.3333 15.4 24.6C16.6667 25.8667 18.2 26.5 20 26.5ZM20 23.5C19.0333 23.5 18.2083 23.1583 17.525 22.475C16.8417 21.7917 16.5 20.9667 16.5 20C16.5 19.0333 16.8417 18.2083 17.525 17.525C18.2083 16.8417 19.0333 16.5 20 16.5C20.9667 16.5 21.7917 16.8417 22.475 17.525C23.1583 18.2083 23.5 19.0333 23.5 20C23.5 20.9667 23.1583 21.7917 22.475 22.475C21.7917 23.1583 20.9667 23.5 20 23.5ZM17.8 37H22.2L22.9 31.4C24 31.1333 25.0417 30.7167 26.025 30.15C27.0083 29.5833 27.9 28.9 28.7 28.1L34 30.4L36 26.8L31.3 23.35C31.4333 22.7833 31.5417 22.225 31.625 21.675C31.7083 21.125 31.75 20.5667 31.75 20C31.75 19.4333 31.7167 18.875 31.65 18.325C31.5833 17.775 31.4667 17.2167 31.3 16.65L36 13.2L34 9.6L28.7 11.9C27.9333 11.0333 27.0667 10.3083 26.1 9.725C25.1333 9.14167 24.0667 8.76667 22.9 8.6L22.2 3H17.8L17.1 8.6C15.9667 8.83333 14.9083 9.23333 13.925 9.8C12.9417 10.3667 12.0667 11.0667 11.3 11.9L6 9.6L4 13.2L8.7 16.65C8.56667 17.2167 8.45833 17.775 8.375 18.325C8.29167 18.875 8.25 19.4333 8.25 20C8.25 20.5667 8.29167 21.125 8.375 21.675C8.45833 22.225 8.56667 22.7833 8.7 23.35L4 26.8L6 30.4L11.3 28.1C12.1 28.9 12.9917 29.5833 13.975 30.15C14.9583 30.7167 16 31.1333 17.1 31.4L17.8 37Z" fill="#14A3C2"/>
            </svg>

            </a>
            <a   id='supprimer' href="../../../back/serveur_delete.php?id=<?php echo $row['id']; ?>"></a>
            <a  title="supprimer" onclick="visibl('Voulez-vous vraiment supprimer ?', 'confirmer')">
            <svg width="30" height="30" viewBox="0 0 42 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30.4 11.95V8.95H42V11.95H30.4ZM16 15C13.8 15 12 14.3 10.6 12.9C9.2 11.5 8.5 9.7 8.5 7.5C8.5 5.3 9.2 3.5 10.6 2.1C12 0.7 13.8 0 16 0C18.2 0 20 0.7 21.4 2.1C22.8 3.5 23.5 5.3 23.5 7.5C23.5 9.7 22.8 11.5 21.4 12.9C20 14.3 18.2 15 16 15ZM0 31.05V26.35C0 25.1833 0.291667 24.125 0.875 23.175C1.45833 22.225 2.3 21.5167 3.4 21.05C5.9 19.95 8.125 19.175 10.075 18.725C12.025 18.275 14 18.05 16 18.05C18 18.05 19.9667 18.275 21.9 18.725C23.8333 19.175 26.05 19.95 28.55 21.05C29.65 21.55 30.5 22.2667 31.1 23.2C31.7 24.1333 32 25.1833 32 26.35V31.05H0ZM3 28.05H29V26.35C29 25.8167 28.85 25.3083 28.55 24.825C28.25 24.3417 27.85 23.9833 27.35 23.75C24.9833 22.65 22.9833 21.925 21.35 21.575C19.7167 21.225 17.9333 21.05 16 21.05C14.0667 21.05 12.275 21.225 10.625 21.575C8.975 21.925 6.96667 22.65 4.6 23.75C4.1 23.9833 3.70833 24.3417 3.425 24.825C3.14167 25.3083 3 25.8167 3 26.35V28.05ZM16 12C17.3 12 18.375 11.575 19.225 10.725C20.075 9.875 20.5 8.8 20.5 7.5C20.5 6.2 20.075 5.125 19.225 4.275C18.375 3.425 17.3 3 16 3C14.7 3 13.625 3.425 12.775 4.275C11.925 5.125 11.5 6.2 11.5 7.5C11.5 8.8 11.925 9.875 12.775 10.725C13.625 11.575 14.7 12 16 12Z" fill="#14A3C2"/>
            </svg>

            </a>
            <a title="changer role" href="../../../back/changerRole.php?id=<?php echo $row['id']; ?>">
            <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 28C28.6333 28 30.025 27.425 31.175 26.275C32.325 25.125 32.9 23.7333 32.9 22.1C32.9 20.4667 32.325 19.075 31.175 17.925C30.025 16.775 28.6333 16.2 27 16.2C25.3667 16.2 23.975 16.775 22.825 17.925C21.675 19.075 21.1 20.4667 21.1 22.1C21.1 23.7333 21.675 25.125 22.825 26.275C23.975 27.425 25.3667 28 27 28ZM13 39.05C14.7 36.8833 16.7667 35.1667 19.2 33.9C21.6333 32.6333 24.2333 32 27 32C29.7667 32 32.3667 32.6333 34.8 33.9C37.2333 35.1667 39.3 36.8833 41 39.05V11H13V39.05ZM13 42C12.1667 42 11.4583 41.7083 10.875 41.125C10.2917 40.5417 10 39.8333 10 39V11C10 10.1667 10.2917 9.45833 10.875 8.875C11.4583 8.29167 12.1667 8 13 8H41C41.8333 8 42.5417 8.29167 43.125 8.875C43.7083 9.45833 44 10.1667 44 11V39C44 39.8333 43.7083 40.5417 43.125 41.125C42.5417 41.7083 41.8333 42 41 42H13ZM7 48C6.16667 48 5.45833 47.7083 4.875 47.125C4.29167 46.5417 4 45.8333 4 45V16.5H7V45H35.5V48H7ZM27 25C26.2 25 25.5167 24.7167 24.95 24.15C24.3833 23.5833 24.1 22.9 24.1 22.1C24.1 21.3 24.3833 20.6167 24.95 20.05C25.5167 19.4833 26.2 19.2 27 19.2C27.8 19.2 28.4833 19.4833 29.05 20.05C29.6167 20.6167 29.9 21.3 29.9 22.1C29.9 22.9 29.6167 23.5833 29.05 24.15C28.4833 24.7167 27.8 25 27 25ZM17.65 39H36.35C35.15 37.7 33.7417 36.7083 32.125 36.025C30.5083 35.3417 28.8 35 27 35C25.2 35 23.4917 35.3417 21.875 36.025C20.2583 36.7083 18.85 37.7 17.65 39Z" fill="#14A3C2"/>
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
            <td colspan="6">
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
     echo " <li class=\"page-item\"><a class=\"page-link\" href=\"admin.php?page=1\">1</a></li>";
  }
     $a = 6;
     if ( $select1->rowCount() >  $a + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"admin.php?page=2\">2</a></li>";
     }
   
     if ( $select1->rowCount() > ($a * 2) + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"admin.php?page=3\">3</a></li>";
     }
    
     if ($select1->rowCount() > ($a * 3) + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"admin.php?page=4\">4</a></li>";
     }
  
     if( $select1->rowCount() > ($a * 4) + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"admin.php?page=5\">5</a></li>";
     }
  
     if (  $select1->rowCount() > ($a * 5) + 1 )
      {
      echo " <li class=\"page-item\"><a class=\"page-link\" href=\"admin.php?page=6\">6</a></li>";
     }
    ?>
     </ul>

    </div>

<script src="../../script_admin.js"></script>
<script src="../header/script-header.js"></script>
</body>
</html>