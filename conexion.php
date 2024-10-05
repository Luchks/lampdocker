<?php
    $servername = "cp.vive.pe";
    $username = "reservac";
    $password = "*GF4Xwzef9dkiKgE";
try {
  $conn = new PDO("mysql:host=$servername;dbname=reservac_Jonathan", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>