<?php
  $hostname = "comunicator-db.mysql.database.azure.com";
  $username = "klaudia@comunicator-db";
  $password = "&NdKpiHrU(oIR";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
