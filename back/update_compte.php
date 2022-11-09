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
?>