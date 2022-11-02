<?php session_start();?>
<?php include "config.php"; ?>
<?php include "data_active.php"; ?>
<?php 
    $id = $_GET['id'];
    $sql = "SELECT * from users WHERE etat = 1  AND id = $id";
    $select = $conn->prepare($sql);
    $select->execute();
    $row = $select->fetch(PDO::FETCH_ASSOC);

        if ($row['role'] == 'administrateur') {
            $req_sql = "UPDATE users SET `role` = 'utilisateur' WHERE id = $id ";
            $req = $conn->prepare($req_sql);
            $req->execute();
            header('location:../front/login/admin/admin.php');
        }
        else  {
            $req_sql = "UPDATE users SET `role` = 'administrateur' WHERE id = $id ";
            $req = $conn->prepare($req_sql);
            $req->execute();
            header('location:../front/login/admin/admin.php');
        }
    ?>