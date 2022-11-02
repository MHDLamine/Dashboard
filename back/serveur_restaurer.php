<?php session_start();?>
<?php include "config.php"; ?>

<?php 
    $id = $_GET['id'];
    $delete = "UPDATE users SET etat = 1 WHERE id = $id";
    $sup = $conn->prepare($delete);
    $sup->execute();
    header('location:../front/login/admin/liste_archive.php')
    
?>