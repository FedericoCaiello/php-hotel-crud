<?php
  include_once 'env.php';

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn && $conn->connect_error) {
      echo "errore di connessione: " . $conn->connect_error;
      die();
   }
