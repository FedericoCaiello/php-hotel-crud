<?php
  include 'server.php';
  include __DIR__ . '/../partials/header.php';
 ?>
 <?php include __DIR__ . '/../partials/footer.php'; ?>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <ul>
              <?php
              include 'server.php';
              ?>
              <h1>Room Number:<?php echo $room['room_number']  ?> </h1>
              <li>Floor:<?php echo $room['floor'] ?> </li>
              <li>Number ID:<?php echo $room['id'] ?> </li>
              <li>Beds:<?php echo $room['beds'] ?> </li>
              <li><?php echo $room['created_at'] ?> </li>
              <li><?php echo $room['updated_at'] ?> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
