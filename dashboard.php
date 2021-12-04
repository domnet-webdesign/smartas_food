
<?php include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>

<?php include './includes/db.php'; ?>


<!-- Begin Page Content --> 
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Total Registered Voters -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Users</div>
              <div class="h5 inner mb-0 font-weight-bold text-gray-800">
                <?php
                  //$sql = "SELECT * FROM voters";
                  //$query = mysqli_query($conn, $sql);
                  //echo "<h3>".$query->num_rows."</h3>";
                ?>
               <h4>Users</h4>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
          <a href="users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <!-- Total Candidates -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Orders</div>
              <div class="h5 inner mb-0 font-weight-bold text-gray-800">
                <?php
                  //$sql = "SELECT * FROM candidates";
                  //$query = $conn->query($sql);

                  //echo "<h3>".$query->num_rows."</h3>";
                ?>
               <h4>Orders</h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa tie fa-2x text-gray-300"></i>
            </div>
          </div>
          <a href="orders.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <!-- Total Candidates -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total of Menus</div>
              <div class="h5 inner mb-0 font-weight-bold text-gray-800">
                <?php
                  //$sql = "SELECT * FROM positions";
                  //$query = $conn->query($sql);

                  //echo "<h3>".$query->num_rows."</h3>";
                ?>
               <h4>Menu</h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-tasks fa-2x text-gray-300"></i>
            </div>
          </div>
          <a href="menus.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <!-- Total Candidates -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Special Dishes</div>
              <div class="h5 inner mb-0 font-weight-bold text-gray-800">
                <?php
                 // $sql = "SELECT * FROM votes GROUP BY voterID";
                  //$query = $conn->query($sql);

                 // echo "<h3>".$query->num_rows."</h3>";
                ?>
               <h4>Special Dishes</h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-edit fa-2x text-gray-300"></i>
            </div>
          </div>
          <a href="specialDishes.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

  <!-- Content Row -->





<?php
include('adminscript.php');
?>