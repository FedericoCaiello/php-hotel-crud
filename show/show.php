<?php
  include __DIR__ . '/../partials/header.php';
 ?>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <ul>
              <?php
              include 'server.php';
              ?>
              <li>id:<?php echo $room['id']  ?> </li>
              <li>Floor:<?php echo $room['floor'] ?> </li>
              <li>Room Number:<?php echo $room['room_number'] ?> </li>
              <li>Beds:<?php echo $room['beds'] ?> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
