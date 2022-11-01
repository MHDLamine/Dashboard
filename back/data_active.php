<?php
      $id = $_SESSION['id'];
      $sql = "SELECT * from users WHERE etat = 1  AND id != $id LIMIT 10";
      $select = $conn->prepare($sql);
      $select->execute();
      $row = $select->fetchAll(PDO::FETCH_ASSOC);
?>