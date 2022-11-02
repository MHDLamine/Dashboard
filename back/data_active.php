<?php
    if (isset($_GET['search'])) {
     if ($_GET['search'] != ""){
        $search = $_GET['search'];
        $sql = "SELECT * from users WHERE etat = 1  AND id != $id AND matricule lIKE '%$search%' LIMIT 7";
        $select = $conn->prepare($sql);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC); }
    
 
    }
    else {
        $id = $_SESSION['id'];
        $sql = "SELECT * from users WHERE etat = 1  AND id != $id LIMIT 7";
        $select = $conn->prepare($sql);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
    }
    
?>