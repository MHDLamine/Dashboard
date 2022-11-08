<?php include "config.php";  ?>
<?php
    if (isset($_POST['submit'])) {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          } 
    
        $email = test_input($_POST['email']);
        $mdp =  test_input($_POST['mdp']);

        $sql_mail = "SELECT * from users WHERE email = ?";
        $select_all = $conn->prepare($sql_mail);
        $select_all->execute([$email]);
        $row = $select_all->fetch(PDO::FETCH_ASSOC);
          
          if ($select_all->rowCount() > 0) {
            if($row['etat'] == 0){
              $message [] = 'l\'utilisateur n\'existe plus';
            }
            else{
            if (password_verify($mdp, $row['mdp'])){
              if ($row['role'] == 'administrateur' ) {
                  session_start();
                  $_SESSION['id'] = $row['id'];
                  header('location:front/login/admin/admin.php');
              }
              else{
                  session_start();
                  $_SESSION['id'] = $row['id'];
                  header('location:front/login/user/user.php');
              }
            }
            else{
                $message [] = 'mot de passe incorrect';
            }
          } }
          else
          {
            $message [] = 'compte inéxistante';
          }

    }
?>