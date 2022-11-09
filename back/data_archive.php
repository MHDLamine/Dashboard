<?php
    if (isset($_GET['search'])) {
     if ($_GET['search'] != ""){
        $search = $_GET['search'];
        $sql_a = "SELECT * from users WHERE etat = 0  AND id != $id AND matricule lIKE '%$search%'";
        $select_a = $conn->prepare($sql_a);
        $select_a->execute();
        $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC); }
    
 
    }
    else {
        $id = $_SESSION['id'];
        $sql_a1 = "SELECT * from users WHERE etat = 0  AND id != $id ";
        $select_a1 = $conn->prepare($sql_a1);
        $select_a1->execute();
        $limit_a = 6;


        $sql_a = "SELECT * from users WHERE  etat = 0  AND id != $id LIMIT  6";
        $select_a = $conn->prepare($sql_a);
        $select_a->execute();
        $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
            
            if (isset($_GET['page_a'])) {
                $page = $_GET['page_a'];
                if ($page == 1) {
                    $sql_a = "SELECT * from users WHERE  etat = 0  AND id != $id LIMIT $limit_a";
                    $select_a = $conn->prepare($sql_a);
                    $select_a->execute();
                    $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
                }
                if ($page == 2) {
                    $debut_a =  $limit_a + 1;
                    $sql_a = "SELECT * from users WHERE  etat = 0  AND id != $id LIMIT $debut_a, $limit_a";
                    $select_a = $conn->prepare($sql_a);
                    $select_a->execute();
                    $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
                }
                if ($page == 3) {
                    $debut_a = round ($limit_a*2) + 1;
                    $sql_a = "SELECT * from users WHERE  etat = 0  AND id != $id LIMIT $debut_a, $limit_a";
                    $select_a = $conn->prepare($sql_a);
                    $select_a->execute();
                    $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
                }
                if ($page == 4) {
                    $debut_a = round ($limit_a*3) + 1;
                    $sql_a = "SELECT * from users WHERE  etat = 0  AND id != $id LIMIT $debut_a, $limit_a";
                    $select_a = $conn->prepare($sql_a);
                    $select_a->execute();
                    $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
                }
                if ($page == 5) {
                    $debut_a = round ($limit_a*4) + 1;
                    $sql_a = "SELECT * from users WHERE  etat = 0  AND id != $id LIMIT $debut_a, $limit_a";
                    $select_a = $conn->prepare($sql_a);
                    $select_a->execute();
                    $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
                }
                if ($page == 6) {
                    $debut_a = round ($limit_a*5) + 1;
                    $sql_a = "SELECT * from users WHERE  etat = 0  AND id != $id LIMIT $debut_a, $limit_a";
                    $select_a = $conn->prepare($sql_a);
                    $select_a->execute();
                    $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
                }
            
            }
    }
    
?>