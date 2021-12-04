<?php include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
    <h1 class="h3 mb-0 text-gray-600 display-5">SMARTAS CUSTOMER ORDER LISTS</h1>
  </div>

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Order ID</th>
                  <th>Ordered Meal</th>
                  <th>Meal Price</th>
                  <th>Meal Qty</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th>Order Date</th>
                  <th>Customer Name</th>
                  <th>Customer Email</th>
                  <th>Customer Contact</th>
                  <th>Customer Address</th>
                </thead>
                <tbody>
                <?php

              include './includes/db.php';

              $sql = "SELECT * FROM tbl_order";
              $query = $connection->query($sql);

                        while($row = mysqli_fetch_array($query)): ?>
                            
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['ordered_meal']; ?></td>
                              <td><?php echo $row['meal_price']; ?></td>
                              <td><?php echo $row['meal_qty']; ?></td>
                              <td><?php echo $row['total']; ?></td>
                              <td><?php echo $row['status']; ?></td>
                              <td><?php echo $row['order_date']; ?></td>
                              <td><?php echo $row['customer_name']; ?></td>
                              <td><?php echo $row['customer_email']; ?></td>
                              <td><?php echo $row['customer_contact']; ?></td>
                              <td><?php echo $row['customer_address']; ?></td>
                              <td>
                                  <a href="order_delete.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"> Delete</a>
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
