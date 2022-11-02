<?php session_start();?>
<?php include "config.php"; ?>

<?php 
    $id = $_GET['id'];
    $date = date('d-m-y h:i:s');
    $delete = "UPDATE users SET etat = 0, date_suppression = '$date'  WHERE id = $id";
    $sup = $conn->prepare($delete);
    $sup->execute();
    header('location:../front/login/admin/admin.php')
    
?>