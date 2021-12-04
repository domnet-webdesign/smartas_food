<?php include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">SMARTAS MENU LISTS</h1>
  </div>

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="menu_add.php" class="btn btn-primary btn-sm btn-flat mb-3"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>MenuID</th>
                  <th>Menu Image</th>
                  <th>Menu Name</th>
                  <th>Menu Price</th>
                </thead>
                <tbody>
                <?php

              include './includes/db.php';

              $sql = "SELECT * FROM menu";
              $query = $connection->query($sql);

                        while($row = mysqli_fetch_array($query)): ?>
                            
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><img width='50px' height='50px' src='<?php echo $row['img']; ?>'></td>
                              <td><?php echo $row['menu_name']; ?></td>
                              <td><?php echo $row['menu_price']; ?></td>

                              <td>
                                  <a href="menu_edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info"> Edit</a>
                                  <a href="menu_delete.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"> Delete</a>
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
