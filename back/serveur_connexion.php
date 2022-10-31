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

        $sql_mail = "SELECT email from users WHERE email = ?";
        $select_mail = $conn->prepare($sql_mail);
        $select_mail->execute([$email]);

          if ($select_mail->rowCount() > 0) {
            $sql_mail_mdp = "SELECT email AND mdp from users WHERE email = ? AND mdp = ?";
            $select_mail_mdp = $conn->prepare($sql_mail_mdp);
            $select_mail_mdp->execute([$email,$mdp]);

            if ($select_mail_mdp->rowCount() > 0) {

                
                $sql_all = "SELECT * from users WHERE email = ? AND mdp = ?";
                $select_all = $conn->prepare($sql_all);
                $select_all->execute([$email,$mdp]);
                $row = $select_all->fetch(PDO::FETCH_ASSOC);

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
          }
          else
          {
            $message [] = 'compte inéxistante';
          }

    }
?>