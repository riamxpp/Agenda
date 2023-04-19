<?php

  $host = "localhost";
  $dbname = "agenda";
  $user = "root";
  $pass = "";

  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    // usar apenas durante a fase de desenvolvimento
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(Exception $e) {
    echo "ERROR: " . $e->getMessage() . '<br>';
  }
?>