<?php
    if (isset($_GET['search'])) {
     if ($_GET['search'] != ""){
        $search = $_GET['search'];
        $sql_a = "SELECT * from users WHERE etat = 1  AND id != $id AND matricule lIKE '%$search%' LIMIT 10";
        $select_a = $conn->prepare($sql_a);
        $select_a->execute();
        $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC); }
    
 
    }
    else {
        $id = $_SESSION['id'];
        $sql_a = "SELECT * from users WHERE etat = 1  AND id != $id LIMIT 10";
        $select_a = $conn->prepare($sql_a);
        $select_a->execute();
        $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
    }
    
?>