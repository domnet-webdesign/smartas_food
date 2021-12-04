<?php 
      include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Registered Users</h1>
  </div>


            <?php

              include './includes/db.php';

              $sql = "SELECT * FROM users";
              $query = $connection->query($sql);


            ?>


    <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <?php include('./includes/message.php'); ?>
            <div class="box-header with-border">
              <a href="users_add.php" class="btn btn-primary btn-sm btn-flat mb-3"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>userID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Confirm Password</th>
                </thead>
                <tbody>
                
                    <?php

                        while($row = mysqli_fetch_array($query)): ?>
                            
                            <tr>
                              <td><?php echo $row['userID']; ?></td>
                              <td><?php echo $row['FirstName']; ?></td>
                              <td><?php echo $row['LastName']; ?></td>
                              <td><?php echo $row['Email']; ?></td>
                              <td><?php echo $row['Password']; ?></td> 
                              <td><?php echo $row['ConfirmPassword']; ?></td>
                              <td>
                                  <a href="users_edit.php?edit=<?php echo $row['userID']; ?>" class="btn btn-info"> Edit</a>
                                  <a href="users_delete.php?delete=<?php echo $row['userID']; ?>" class="btn btn-danger"> Delete</a>
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







