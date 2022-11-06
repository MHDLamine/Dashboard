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
        $prenom = test_input($_POST['prenom']);
        $nom = test_input($_POST['nom']);
        $email = test_input($_POST['email']);

        $modifier = "UPDATE users SET prenom = '$prenom', nom = '$nom', email = '$email' WHERE id = $id";
        $up = $conn->prepare($modifier);
        $up->execute();
        $md = "<a href=\"admin.php\"  id= \"r\" >reussie</a>";
    }
?>