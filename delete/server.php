<?php
  include __DIR__ . '/../database.php';

  $idRoom = $_POST['id'];
  echo $idRoom;

  if (empty($_POST['id'])) {
    die('id non corretto empty' );
  }

  $sql = "DELETE FROM `stanze` WHERE `id` = '$idRoom';";
  $result = $conn->query($sql);


  $result = $conn->query($sql);
  var_dump($result);

  if ($result) {
    echo 'ok';
  } else {
    echo 'KO';
  }
  $conn->close();

  header("location:http://localhost/php-hotel-crud/index.php#");
