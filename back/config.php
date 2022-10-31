<?php
$host = "localhost";
$user = "root";
$mdp = "";
$dbname = "dash";

$dsn = "mysql:host=$host;dbname=$dbname";

try {
  $conn = new PDO($dsn, $user, $mdp);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo " " . $e->getMessage();
}

?>