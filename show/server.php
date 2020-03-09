<?php
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';


  if(empty($_GET['id'])) {
    die('ID non esistente');
  }
  $idRoom = $_GET['id'];

  $room = getById($conn, 'stanze', $idRoom);
