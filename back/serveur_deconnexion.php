<?php
        session_start();
        if( isset($_GET['logout']) && $_GET['logout'] == 1 ) {
        session_destroy();
        $d = "<a id=\"d\" href=\"../index.php\"></a>";
        
      }
     
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="background-color: grey;">
  <p> vous êtes déconnecté (e)</p>
  <?php if (isset($d)) {
    echo $d;
  } ?>
</body>

      <script>
        r = document.getElementById('d');
        function appui ()
        {
          r.click();
        }
        if (r) {
          setTimeout(appui, 1300)
        }

      
      </script>
</html>