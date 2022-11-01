<?php
      $sql_a = "SELECT * from users WHERE etat = 0 AND id != $id LIMIT 10";
      $select_a = $conn->prepare($sql_a);
      $select_a->execute();
      $row_a = $select_a->fetchAll(PDO::FETCH_ASSOC);
?>
