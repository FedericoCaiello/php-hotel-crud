<?php
  include_once __DIR__ . '/../env.php';
  include __DIR__ . '/../database.php';

  if(empty($_POST['id'])) {
    die('id non inserito');
  }
  if(empty($_POST['beds'])) {
    die('non hai inserito il numero di letti');
  }
  if(empty($_POST['floor'])) {
    die('non hai inserito il piano');
  }
  if(empty($_POST['room_number'])) {
    die('non hai inserito il numero di stanza');
  }


  $idRoom = $_POST['id'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $room_number = $_POST['room_number'];

  $sql =
  "SELECT *
   FROM `stanze`
   WHERE `id` = '$idRoom'";

  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
  }else {
    die('id non esistente');
  }

  $sql =
  "UPDATE `stanze`
  SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
  WHERE id = $idRoom";

  $result = $conn->query($sql);

  if($result) {
    header("location:http://localhost/php-hotel-crud/show/show.php?id=$idRoom");
  }else {
    echo 'KO';
  }
