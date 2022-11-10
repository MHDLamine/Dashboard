<?php include "config.php";  ?>
<?php
if(isset($_POST['submit']))
{
     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 

    $prenom = test_input($_POST['prenom']);
    $nom = test_input($_POST['nom']);
    $email = test_input($_POST['email']);
    $role = test_input($_POST['role']);
    $passe =  test_input($_POST['mdp']);
    $mdp = password_hash($passe,PASSWORD_DEFAULT);

   

    $image = $_FILES['img']['name'];
        if ($image == "") {
        $image = NULL;
        }
    $emplacement_tmp = $_FILES['img']['tmp_name'];
    $image_taille = $_FILES['img']['size'];
    $emplacement_local = 'photo_utilisateur/' .$image;
  
  
    $sql = "SELECT email from users WHERE email = ?";
    $mail = $conn->prepare(($sql));
    $mail->execute([$email]);

    if ($mail->rowCount() > 0) {
        $rendu[] = "l'adresse mail existe déja";
    }
    else if ($image_taille > 2000000)
    {
        $rendu[] = "la taille de l'image est supérieur à 2 mo";
    }
    else {
    
        $insert = "INSERT INTO `users` (`prenom`, `nom`, `email`, `role`, `mdp`,`image`) VALUES (?, ?, ?, ?, ?, ?)";

        $insertion = $conn->prepare($insert);
        $insertion->execute([ $prenom, $nom, $email, $role, $mdp, $image]);
        if ($insertion) {
            move_uploaded_file($emplacement_tmp, $emplacement_local);
        }
        $matricule =  'TP-2022-'. $conn->lastInsertId();
        $mat = "UPDATE  users SET matricule = '$matricule' WHERE email = '$email'";
        $modification = $conn->prepare($mat);
        $modification->execute();
        $rendu[] = "";
        $correct = "<a  href=\"admin.php\"  id= \"ok\" >Inscription réussie</a></br></br>";
       
    }  
}

?>