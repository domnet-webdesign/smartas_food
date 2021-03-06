<?php session_start(); ?>   
   
   
   
   
   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">SMARTAS ADMIN PANEL</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="dashboard.php">
  <i class="fas fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  REPORT
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="users.php" >
    <i class="fas fa-fw fa-cog"></i>
    <span>USERS</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link" href="orders.php" >
    <i class="fas fa-fw fa-cog"></i>
    <span>ORDERS</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link" href="menus.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>MENU</span></a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="specialDishes.php">
    <i class="fas fa-fw fa-wrench"></i>
    <span>SPECIAL MENU</span>
  </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="reserve.php">
    <i class="fas fa-fw fa-wrench"></i>
    <span>RESERVATION</span>
  </a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<!-- <div class="sidebar-heading">
  SETTINGS
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Accounts</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Login Screens:</h6>
      <a class="collapse-item" href="login.html">Login</a>
      <a class="collapse-item" href="register.html">Register</a>
      <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
      <div class="collapse-divider"></div>
      <h6 class="collapse-header">Other Pages:</h6>
      <a class="collapse-item" href="404.html">404 Page</a>
      <a class="collapse-item" href="blank.html">Blank Page</a>
    </div>
  </div>
</li> -->

<!-- Nav Item - Charts -->
<!-- <li class="nav-item">
  <a class="nav-link" href="charts.html">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Charts</span></a>
</li> -->

<!-- Nav Item - Tables -->
<!-- <li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-fw fa-table"></i>
    <span>Tables</span></a>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<!-- <div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> -->

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item my-2 my-lg-0">
              <a href="#" class="nav-link">My Profile</a>
            </li>
            <li class="nav-item my-2 my-lg-0">
              <a class="nav-link" href="registration.php">Logout</a>
            </li>
          </ul>
        </nav>

  
