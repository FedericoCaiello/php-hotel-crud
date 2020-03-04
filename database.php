<?php
  include 'env.php';

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn && $conn->connect_error) {
      echo "errore di connessione: " . $conn->connect_error;
      die();
   }

    $sql =
    "SELECT *
     FROM 'stanze'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
         echo 'ID' . $row['id'] . ' - floor: ' .$row['floor'];

    }
    elseif ($result) {
      echo 'No results';
    }
    else {
      echo 'Query error';
    }
    $conn->close();
