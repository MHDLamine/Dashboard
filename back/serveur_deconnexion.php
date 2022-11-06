<?php
      session_start();
     
        if( isset($_GET['logout']) && $_GET['logout'] == 1 ) {
        session_destroy();
        $_SESSION['id'] == "";
        while ($_SESSION['id'] == "") {
          header('location:../../../index.php');
        }
      }
     
    
?>