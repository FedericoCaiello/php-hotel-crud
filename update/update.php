<?php
  include 'server.php';
  include __DIR__ . '/../partials/header.php';
 ?>

 <div class="container">
   <div class="row">
    <div class="col-12">
      <form action="server.php" method="POST">
        <div class="form-group">
          <label for="room_number">Numero Stanza</label>
          <input class="form-control" type="text" name="room_number" value="">
        </div>
        <div class="form-group">
          <label for="floor">Piano</label>
          <input type="text" name="room_number" value="">
        </div>
        <div class="form-group">
          <label for="beds">Numero Letti</label>
          <input class="form-control" type="text" name="beds" value="">
          <div class="form-group">
            <input type="hidden" name="id" value="">
            <input class="form-control" class="btn btn-submit" type="submit" value="salva">

          </div>
        </div>
      </form>
    </div>
   </div>
 </div>

 <?php
  include __DIR__ . '/../partials/footer.php';
  ?>
