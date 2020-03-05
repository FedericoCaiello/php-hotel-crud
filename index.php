<?php
  include 'server.php';
  include 'partials/header.php';
 ?>
     <div class="container">
       <div class="row">
         <div class="col-12">
           <h1>Tutte le stanze</h1>
           <table class="table">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Floor</th>
                 <th></th>
                 <th></th>
                 <th></th>
               </tr>
             </thead>
             <tbody>
               <?php
               if (!empty($rooms)) {
                 foreach ($rooms as $room) { ?>
                   <tr>
                     <td><?php echo $room['id'] ?></td>
                     <td><?php echo $room['floor'] ?></td>
                     <td><a href="show/show.php?id=<?php echo $room['id'] ?>">VIEW</a></td>
                     <td><a href="">UPDATE</a></td>
                     <td>DELETE</td>
                   </tr>
              <?php }
               }
              ?>
             </tbody>
           </table>
         </div>
       </div>
     </div>
     <?php include 'partials/footer.php'; ?>
