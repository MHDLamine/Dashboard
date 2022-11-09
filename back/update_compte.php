<?php
if (isset($_POST['tof_edit'])) {
    $id = $_POST['id'];
    $old_photo = $_POST['old_file'];
    $photo = $_FILES['file']['name'];
    $photo_tmp = $_FILES['file']['tmp_name'];
    $image_taille = $_FILES['file']['size'];
    if ($photo != NULL) {
        
        if ($image_taille > 2000000)
    {
        $rendu[] = "la taille de l'image est supérieur à 2 mo";
    }
    else {
        
        unlink('../../inscription/photo_utilisateur/'. $old_photo);
        $up = "UPDATE  users SET `image` = ? WHERE id = $id";
        $modification = $conn->prepare($up);
        $modification->execute([$photo]);
        if ($modification) {
            move_uploaded_file($photo_tmp, '../../inscription/photo_utilisateur/'. $photo);
            $rendu[] = "la taille de l'image est supérieur à 2 mo";
            $success = "<div id=\"success\" ></div>";
        }
       
    }  
   
    }
     
}

    //modifier mdp
    if (isset($_POST['mdp_edit'])) 
    {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          } 

        $id = $_POST['id_user'];
        $ancien_mdp = test_input($_POST['mdp']);
        $new_mdp = test_input($_POST['mdp_c']);
      

        $user_sql = "SELECT * from users WHERE id = ?";
        $sel = $conn->prepare($user_sql);
        $sel->execute([$id]);
        $row = $sel->fetch(PDO::FETCH_ASSOC);
       
    
       if (password_verify($ancien_mdp, $row['mdp']) != 1) {
        $_echo = "le mot de passe est invalide";
       }
       else
       {
            if ($ancien_mdp == $new_mdp) {
                $_echo = "les mots de passe sont identique";
            }
            else {
                $hass = password_hash($new_mdp,PASSWORD_DEFAULT);
                $up = "UPDATE  users SET mdp = ? WHERE id = $id";
                $modification = $conn->prepare($up);
                $modification->execute([$hass]);
                $_echoW = "Modification réussie";
            }
       }
       
    }
?>