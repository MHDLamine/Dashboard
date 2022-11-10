 <?php

    {
        if (isset($_POST['submit']) && isset($_POST['search']) &&  $_POST['search'] != "") {
            $retour= "<a style=\"background-color:white;\" href=\"admin.php\">liste</a>";
            $retour_user = "<a style=\"background-color:white;\" href=\"user.php\">Liste</a>";
           
                $search = $_POST['search'];
                $sql = "SELECT * from users WHERE etat = 1  AND id != $id AND matricule lIKE '%$search%' OR email like '%$search%' ";
                $select = $conn->prepare($sql);
                $select->execute();
                    if ( $select->rowCount() == 0 ) {
                        $notexiste = "<p style=\"color:white;\">l'utilisateur " . $search. " n'existe pas</p>";
                    }
                
               
                $row = $select->fetchAll(PDO::FETCH_ASSOC);
                $select1 = $select;
                $select1->execute();
        }
        else 
        {
            $id = $_SESSION['id'];
            $sql1 = "SELECT * from users WHERE  etat = 1  AND id != $id ";
            $select1 = $conn->prepare($sql1);
            $select1->execute();
            $limit = 6;
            

            $sql = "SELECT * from users WHERE  etat = 1  AND id != $id LIMIT  6";
            $select = $conn->prepare($sql);
            $select->execute();
            $row = $select->fetchAll(PDO::FETCH_ASSOC);
                
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if ($page == 1) {
                        $sql = "SELECT * from users WHERE  etat = 1  AND id != $id LIMIT $limit";
                        $select = $conn->prepare($sql);
                        $select->execute();
                        $row = $select->fetchAll(PDO::FETCH_ASSOC);
                    }
                    if ($page == 2) {
                        $debut =  $limit + 1;
                        $sql = "SELECT * from users WHERE  etat = 1  AND id != $id LIMIT $debut, $limit";
                        $select = $conn->prepare($sql);
                        $select->execute();
                        $row = $select->fetchAll(PDO::FETCH_ASSOC);
                    }
                    if ($page == 3) {
                        $debut = round($limit*2) +1;
                        $sql = "SELECT * from users WHERE  etat = 1  AND id != $id LIMIT $debut , $limit";
                        $select = $conn->prepare($sql);
                        $select->execute();
                        $row = $select->fetchAll(PDO::FETCH_ASSOC);
                    }
                    if ($page == 4) {
                        $debut = round($limit*3) + 1;
                        $sql = "SELECT * from users WHERE  etat = 1  AND id != $id LIMIT $debut, $limit";
                        $select = $conn->prepare($sql);
                        $select->execute();
                        $row = $select->fetchAll(PDO::FETCH_ASSOC);
                    }
                    if ($page == 5) {
                        $debut = round($limit*4) + 1;
                        $sql = "SELECT * from users WHERE  etat = 1  AND id != $id LIMIT $debut, $limit";
                        $select = $conn->prepare($sql);
                        $select->execute();
                        $row = $select->fetchAll(PDO::FETCH_ASSOC);
                    }
                    if ($page == 6) {
                        $debut = round($limit*5) + 1;
                        $sql = "SELECT * from users WHERE  etat = 1  AND id != $id LIMIT $debut, $limit";
                        $select = $conn->prepare($sql);
                        $select->execute();
                        $row = $select->fetchAll(PDO::FETCH_ASSOC);
                    }
                }
        }
    }

?>
    
