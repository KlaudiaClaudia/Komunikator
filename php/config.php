<?php
  $hostname = "comunicator-db.mysql.database.azure.com";
  $username = "klaudia@comunicator-db";
  $password = "&NdKpiHrU(oIR";
  $dbname = "chatapp";

  $conn = mysqli_init();
  $conn->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
  $conn->ssl_set(NULL, NULL, __DIR__ . "/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
  $conn->real_connect($hostname, $username, $password, $dbname);

  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
