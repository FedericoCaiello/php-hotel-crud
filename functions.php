<?php

function getAll ($conn, $table) {
  $sql =
  "SELECT *
   FROM `$table`";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $results = [];
     while($row = $result->fetch_assoc()) {

       $results[] = $row;

    }
  }
  elseif ($result) {
    $results = [];
  }
  else {
    $results = false;
  }
  $conn->close();
  return $results;

}

 function getById ($conn, $table, $id) {
   $sql =
   "SELECT *
    FROM `$table`
    WHERE `id` = '$id'";
   $resultQuery = $conn->query($sql);

   if ($resultQuery && $resultQuery->num_rows > 0) {
     $result = $resultQuery->fetch_assoc();
   }elseif ($resultQuery) {
     $result = [];
   }else {
     $result = false;
   }
   $conn->close();
   return $result;

}
