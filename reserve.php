<?php 
      
      include 'adminpanel.php'; 
      include 'adminnavbar.php';

?>

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">TABLE RESERVATIONS</h1>
  </div>


            

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="reserve_add.php" class="btn btn-primary btn-sm btn-flat mb-3"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>ReservationID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Number of People</th>
                  <th>Message</th>
                </thead>
                <tbody>
                <?php

                        include './includes/db.php';

                        $sql = "SELECT * FROM reservation";
                        $query = $connection->query($sql);

                        while($row = mysqli_fetch_array($query)): ?>
                            
                            <tr>
                              <td><?php echo $row['reserveID']; ?></td>
                              <td><?php echo $row['fullname']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['phone_number']; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td><?php echo $row['time']; ?></td>
                              <td><?php echo $row['number_people']; ?></td>
                              <td><?php echo $row['mesage']; ?></td>
                              <td>
                                  <a href="reserve_edit.php?edit=<?php echo $row['reserveID']; ?>" class="btn btn-info"> Edit</a>
                                  <a href="reserve_delete.php?delete=<?php echo $row['reserveID']; ?>" class="btn btn-danger"> Delete</a>
                              </td>
                            </tr>
                <?php endwhile; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>


</div>


<?php

    include('adminscript.php');

?>