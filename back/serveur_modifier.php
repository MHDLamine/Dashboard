<?php
    if(isset($_POST['submit']))
    {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        } 
        $id = $_GET['id'];
        $email_avant_edit = $_POST['email_avant_edit'];
        $prenom = test_input($_POST['prenom']);
        $nom = test_input($_POST['nom']);
        $email = test_input($_POST['email']);

            
        $sql2 = "SELECT email from users WHERE email = ? AND email != ?";
        $mail2 = $conn->prepare(($sql2));
        $mail2->execute([$email,$email_avant_edit]);
    

        if ( $mail2->rowCount() > 0) {
            $md = "<p>Ce mail existe déja</p>";
        }
                else{
                $modifier = "UPDATE users SET prenom = '$prenom', nom = '$nom', email = '$email' WHERE id = $id";
                $up = $conn->prepare($modifier);
                $up->execute();
                $md = "<a href=\"admin.php\"  id= \"r\" >reussie</a>";
                }
    }
?>