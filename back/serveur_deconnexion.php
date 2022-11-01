<?php
     echo "deconnexion reussi";
     if( isset($_GET['logout']) && $_GET['logout'] == 1 ) {
        session_destroy();
        header('location:../index.php');
      }
     
    
?>